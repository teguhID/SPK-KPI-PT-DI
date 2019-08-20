<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKaryawanModel extends Model
{

    protected $table = 'datakaryawan';
    protected $fillable = [ 'nama', 'nik', 'alamat', 'jenisKelamin', 'tempatLahir', 'tanggalLahir', 'divisi', 'jabatan', 'email', 'phone', 'updated_at', 'created_at']; 

}
