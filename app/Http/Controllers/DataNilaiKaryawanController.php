<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataKaryawanModel;
use App\DataNilaiKaryawanModel;
use App\NilaiBobotModel;
use App\NilaiNormalisasiModel;
use App\NilaiHasilModel;
use Auth;

class DataNilaiKaryawanController extends Controller
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
        $data = DataNilaiKaryawanModel::find($id);
        return view('dataNilaiKaryawan/editData')->with('data', $data);
    }

    public function update($id, Request $req)
    {
        DataNilaiKaryawanModel::find($id)->update($req->all());
        //NORMALISASI
        if (Auth::user()->jabatan == 'SPV') {
            $this->rumusMetode('Staff');
        }
        if (Auth::user()->jabatan == 'Manager') {
            $this->rumusMetode('SPV');
        }
        if (Auth::user()->jabatan == 'HRD') {
            $this->rumusMetode('Manager');
        }
        return redirect('/home/dataNilaiKaryawan');
    }

    public function rumusMetode($jabatan)
    {
        $maxGeneralKnowledge = DataNilaiKaryawanModel::where('jabatan', $jabatan)->max('generalKnowledge');
        $maxBasic = DataNilaiKaryawanModel::where('jabatan', $jabatan)->max('basic');
        $maxIntermediate = DataNilaiKaryawanModel::where('jabatan', $jabatan)->max('intermediate');
        $maxAdvance = DataNilaiKaryawanModel::where('jabatan', $jabatan)->max('advance');

        // Normalisasi
        $nilai = DataNilaiKaryawanModel::where('jabatan', $jabatan)->get();
        foreach ($nilai as $index => $items) {
            // echo '<br>' . $bobot[$index]->basic . '<br>';
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
