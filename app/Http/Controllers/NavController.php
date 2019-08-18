<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataKaryawanModel;
use App\DataNilaiKaryawanModel;
use App\NilaiBobotModel;
use App\NilaiNormalisasiModel;
use App\NilaiHasilModel;
use Auth;

class NavController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->jabatan == 'SPV') {
            $data = [
                'jumlahKaryawan' => DataKaryawanModel::where('jabatan', 'Staff')->count(),
                'rata2Nilai'   => NilaiHasilModel::where('jabatan', 'Staff')->avg('hasil'),
                'terbaik' => NilaiHasilModel::orderBy('hasil', 'desc')->where('jabatan', 'Staff')->first(),
            ];
            // $data = DataKaryawanModel::where('jabatan', 'Staff')->get(); 
        }
        if (Auth::user()->jabatan == 'Manager') {
            $data = [
                'jumlahKaryawan' => DataKaryawanModel::where('jabatan', 'SPV')->count(),
                'rata2Nilai'   => NilaiHasilModel::where('jabatan', 'SPV')->avg('hasil'),
                'terbaik' => NilaiHasilModel::orderBy('hasil', 'desc')->where('jabatan', 'SPV')->first(),
            ]; 
        }
        if (Auth::user()->jabatan == 'HRD') {
            $data = [
                'jumlahKaryawan' => DataKaryawanModel::where('jabatan', 'Manager')->count(),
                'rata2Nilai'   => NilaiHasilModel::where('jabatan', 'Manager')->avg('hasil'),
                'terbaik' => NilaiHasilModel::orderBy('hasil', 'desc')->where('jabatan', 'Manager')->first(),
            ];
        }
        return view('nav/dashboard')->with($data);
    }

    public function DataKaryawan()
    {
        if (Auth::user()->jabatan == 'SPV') {
            $data = DataKaryawanModel::where('jabatan', 'Staff')->get(); 
        }
        if (Auth::user()->jabatan == 'Manager') {
            $data = DataKaryawanModel::where('jabatan', 'SPV')->get(); 
        }
        if (Auth::user()->jabatan == 'HRD') {
            $data = DataKaryawanModel::where('jabatan', 'Manager')->get(); 
        }
        return view('nav/dataKaryawan')->with('data', $data);
    }

    public function DataNilaiKaryawan()
    {
        if (Auth::user()->jabatan == 'SPV') {
            $data = DataNilaiKaryawanModel::where('jabatan', 'Staff')->get(); 
        }
        if (Auth::user()->jabatan == 'Manager') {
            $data = DataNilaiKaryawanModel::where('jabatan', 'SPV')->get(); 
        }
        if (Auth::user()->jabatan == 'HRD') {
            $data = DataNilaiKaryawanModel::where('jabatan', 'Manager')->get(); 
        }
        return view('nav/dataNilaiKaryawan')->with('data', $data);
    }

    public function NilaiBobot()
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
        return view('nav/nilaiBobot')->with('data', $data);
    }

    public function NilaiNormalisasi()
    {
        if (Auth::user()->jabatan == 'SPV') {
            $data = NilaiNormalisasiModel::where('jabatan', 'Staff')->get(); 
        }
        if (Auth::user()->jabatan == 'Manager') {
            $data = NilaiNormalisasiModel::where('jabatan', 'SPV')->get(); 
        }
        if (Auth::user()->jabatan == 'HRD') {
            $data = NilaiNormalisasiModel::where('jabatan', 'Manager')->get(); 
        }
        return view('nav/nilaiNormalisasi')->with('data', $data);
    }

    public function NilaiHasil()
    {
        if (Auth::user()->jabatan == 'SPV') {
            $data = NilaiHasilModel::where('jabatan', 'Staff')->orderBy('hasil', 'desc')->get(); 
        }
        if (Auth::user()->jabatan == 'Manager') {
            $data = NilaiHasilModel::where('jabatan', 'SPV')->orderBy('hasil', 'desc')->get(); 
        }
        if (Auth::user()->jabatan == 'HRD') {
            $data = NilaiHasilModel::where('jabatan', 'Manager')->orderBy('hasil', 'desc')->get(); 
        }
        return view('nav/nilaiHasil')->with('data', $data);
    }
}
