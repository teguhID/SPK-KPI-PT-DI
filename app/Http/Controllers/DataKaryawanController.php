<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataKaryawanModel;
use App\DataNilaiKaryawanModel;
use App\NilaiNormalisasiModel;
use App\NilaiHasilModel;
use Auth;

class DataKaryawanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        # code...
    }

    public function create()
    {
        return view('dataKaryawan/buatData');
    }
    
    public function store(Request $req)
    {
        $this->validate($req,[
            'nama' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'jenisKelamin' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'divisi' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ], 
        [
            'nama.required' => 'isi yang bener ajig',
            'nik.required' => 'isi yang bener ajig',
            'alamat.required' => 'isi yang bener ajig',
            'jenisKelamin.required' => 'isi yang bener ajig',
            'tempatLahir.required' => 'isi yang bener ajig',
            'tanggalLahir.required' => 'isi yang bener ajig',
            'divisi.required' => 'isi yang bener ajig',
            'email.required' => 'isi yang bener ajig',
            'phone.required' => 'isi yang bener ajig',
        ]);
        $data = DataKaryawanModel::create($req->all());
        if (Auth::user()->jabatan == 'SPV') {
            DataNilaiKaryawanModel::create(['idKaryawan' => $data->id,
                        'nama' => request('nama'),
                        'nik' => request('nik'),
                        'jabatan' => request('jabatan'),
                        'generalKnowledge' => 0,
                        'basic'=> 0,
                        'intermediate' => 0,
                        'advance' => 0,
                        ]);
            NilaiNormalisasiModel::create(['idKaryawan' => $data->id,
                        'nama' => request('nama'),
                        'nik' => request('nik'),
                        'jabatan' => request('jabatan'),
                        'generalKnowledge' => 0,
                        'basic'=> 0,
                        'intermediate' => 0,
                        'advance' => 0,
                        ]);
            NilaiHasilModel::create(['idKaryawan' => $data->id,
                        'nama' => request('nama'),
                        'nik' => request('nik'),
                        'jabatan' => request('jabatan'),
                        'divisi' => request('divisi'),
                        'hasil' => 0,
                        ]);
        }
        if (Auth::user()->jabatan == 'Manager') {
            DataNilaiKaryawanModel::create(['idKaryawan' => $data->id,
                        'nama' => request('nama'),
                        'nik' => request('nik'),
                        'jabatan' => request('jabatan'),
                        'generalKnowledge' => 0,
                        'basic'=> 0,
                        'intermediate' => 0,
                        'advance' => 0,
                        ]);
            NilaiNormalisasiModel::create(['idKaryawan' => $data->id,
                        'nama' => request('nama'),
                        'nik' => request('nik'),
                        'jabatan' => request('jabatan'),
                        'generalKnowledge' => 0,
                        'basic'=> 0,
                        'intermediate' => 0,
                        'advance' => 0,
                        ]);
            NilaiHasilModel::create(['idKaryawan' => $data->id,
                        'nama' => request('nama'),
                        'nik' => request('nik'),
                        'jabatan' => request('jabatan'),
                        'divisi' => request('divisi'),
                        'hasil' => 0,
                        ]);
        }
        if (Auth::user()->jabatan == 'HRD') {
            DataNilaiKaryawanModel::create(['idKaryawan' => $data->id,
                        'nama' => request('nama'),
                        'nik' => request('nik'),
                        'jabatan' => request('jabatan'),
                        'generalKnowledge' => 0,
                        'basic'=> 0,
                        'intermediate' => 0,
                        'advance' => 0,
                        ]);
            NilaiNormalisasiModel::create(['idKaryawan' => $data->id,
                        'nama' => request('nama'),
                        'nik' => request('nik'),
                        'jabatan' => request('jabatan'),
                        'generalKnowledge' => 0,
                        'basic'=> 0,
                        'intermediate' => 0,
                        'advance' => 0,
                        ]);
            NilaiHasilModel::create(['idKaryawan' => $data->id,
                        'nama' => request('nama'),
                        'nik' => request('nik'),
                        'jabatan' => request('jabatan'),
                        'divisi' => request('divisi'),
                        'hasil' => 0,
                        ]);
        }
        
        return redirect('/home/dataKaryawan');
    }

    public function edit($id)
    {
        $data = DataKaryawanModel::find($id);
        return view('dataKaryawan/editData')->with('data', $data);
    }

    public function update($id, Request $req)
    {
        $this->validate($req,[
            'nama' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'jenisKelamin' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'divisi' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ], 
        [
            'nama.required' => 'isi yang bener ajig',
            'nik.required' => 'isi yang bener ajig',
            'alamat.required' => 'isi yang bener ajig',
            'jenisKelamin.required' => 'isi yang bener ajig',
            'tempatLahir.required' => 'isi yang bener ajig',
            'tanggalLahir.required' => 'isi yang bener ajig',
            'divisi.required' => 'isi yang bener ajig',
            'email.required' => 'isi yang bener ajig',
            'phone.required' => 'isi yang bener ajig',
        ]);
        DataKaryawanModel::find($id)->update($req->all());
        DataNilaiKaryawanModel::where('idKaryawan', $id)->update([
                                                                   'nama' => request('nama'),
                                                                   'nik' => request('nik')
                                                                ]);
        NilaiNormalisasiModel::where('idKaryawan', $id)->update([
                                                                    'nama' => request('nama'),
                                                                    'nik' => request('nik')
                                                                 ]);
        NilaiHasilModel::where('idKaryawan', $id)->update([
                                                        'nama' => request('nama'),
                                                        'nik' => request('nik'),
                                                        'divisi' => request('divisi'),
                                                        ]);
        return redirect('/home/dataKaryawan');
    }

    public function destroy($id)
    {
        DataKaryawanModel::find($id)->delete();
        DataNilaiKaryawanModel::where('idKaryawan', $id)->delete();
        NilaiNormalisasiModel::where('idKaryawan', $id)->delete();
        NilaiHasilModel::where('idKaryawan', $id)->delete();
        return redirect('/home/dataKaryawan');
    }
}
