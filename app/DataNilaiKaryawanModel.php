<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataNilaiKaryawanModel extends Model
{
    protected $table = 'nilaikaryawan';
    protected $fillable = [ 'idKaryawan', 'nik', 'nama', 'jabatan', 'generalKnowledge', 'basic', 'intermediate', 'advance', 'updated_at', 'created_at']; 
}
