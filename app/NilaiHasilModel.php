<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiHasilModel extends Model
{
    protected $table = 'nilaihasil';
    protected $fillable = [ 'idKaryawan', 'nik', 'nama', 'divisi', 'jabatan', 'hasil', 'updated_at', 'created_at']; 
}
