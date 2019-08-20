<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataKaryawanModel;
use App\DataNilaiKaryawanModel;
use App\NilaiBobotModel;
use App\NilaiNormalisasiModel;
use App\NilaiHasilModel;
use Auth;

class NilaiBobotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        # code...
    }

    public function edit($id)
    {
        if (Auth::user()->jabatan == 'SPV') {
            $data = NilaiBobotModel::where('jabatan', 'Staff')->first();
        }
        if (Auth::user()->jabatan == 'Manager') {
            $data = NilaiBobotModel::where('jabatan', 'SPV')->first();
        }
        if (Auth::user()->jabatan == 'HRD') {
            $data = NilaiBobotModel::where('jabatan', 'Manager')->first();
        }
        return view('nilaiBobot/editData')->with('data', $data);
    }

    public function update(Request $req, $id)
    {
        if (Auth::user()->jabatan == 'SPV') {
            NilaiBobotModel::where('jabatan', 'Staff')->update($req->except(['_method', '_token']));
            $this->rumusMetode('Staff');
        }
        if (Auth::user()->jabatan == 'Manager') {
            NilaiBobotModel::where('jabatan', 'SPV')->update($req->except(['_method', '_token']));
            $this->rumusMetode('SPV');
        }
        if (Auth::user()->jabatan == 'HRD') {
            NilaiBobotModel::where('jabatan', 'Manager')->update($req->except(['_method', '_token']));
            $this->rumusMetode('Manager');
        }
        return redirect('/home/nilaiBobot');
    }

    public function rumusMetode($jabatan)
    {
        //NORMALISASI
        $maxGeneralKnowledge = DataNilaiKaryawanModel::where('jabatan', $jabatan)->max('generalKnowledge');
        $maxBasic = DataNilaiKaryawanModel::where('jabatan', $jabatan)->max('basic');
        $maxIntermediate = DataNilaiKaryawanModel::where('jabatan', $jabatan)->max('intermediate');
        $maxAdvance = DataNilaiKaryawanModel::where('jabatan', $jabatan)->max('advance');
        $item = DataNilaiKaryawanModel::where('jabatan', $jabatan)->get();
        foreach ($item as $items) {
            $normalisasiGeneralKnowledge = $items->generalKnowledge / $maxGeneralKnowledge;
            $normalisasiBasic = $items->basic / $maxBasic;
            $normalisasiIntermediate = $items->intermediate / $maxIntermediate;
            $normalisasiAdvance = $items->advance / $maxAdvance;
            NilaiNormalisasiModel::where('idKaryawan', $items->idKaryawan)->update([
                'generalKnowledge'=>$normalisasiGeneralKnowledge,
                'basic'=>$normalisasiBasic,
                'intermediate'=>$normalisasiIntermediate,
                'advance'=>$normalisasiAdvance,
                ]);
        }
        //HASIL
        $bobotGeneralknowledge = NilaiBobotModel::where('jabatan', $jabatan)->get(['generalKnowledge'])->pluck('generalKnowledge')->first();
        $bobotbasic = NilaiBobotModel::where('jabatan', $jabatan)->get(['basic'])->pluck('basic')->first();
        $bobotIntermediate = NilaiBobotModel::where('jabatan', $jabatan)->get(['intermediate'])->pluck('intermediate')->first();
        $bobotAdvance = NilaiBobotModel::where('jabatan', $jabatan)->get(['advance'])->pluck('advance')->first();
        $item = NilaiNormalisasiModel::where('jabatan', $jabatan)->get();
        foreach ($item as $items) {
           $hasil = ( $items->generalKnowledge * $bobotGeneralknowledge )+( $items->basic * $bobotbasic )+( $items->intermediate * $bobotIntermediate )+( $items->advance * $bobotAdvance );
           NilaiHasilModel::where( 'idKaryawan', $items->idKaryawan )->update(['hasil'=>$hasil,]);
        }
    }
}
