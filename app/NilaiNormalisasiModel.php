<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiNormalisasiModel extends Model
{
    protected $table = 'nilainormalisasi';
    protected $fillable = [ 'idKaryawan', 'nik', 'nama', 'jabatan', 'generalKnowledge', 'basic', 'intermediate', 'advance', 'updated_at', 'created_at']; 

}
