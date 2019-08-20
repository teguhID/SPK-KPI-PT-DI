<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiBobotModel extends Model
{
    protected $table = 'bobot';
    protected $fillable = [ 'generalKnowledge', 'basic', 'intermediate', 'advance', 'updated_at', 'created_at']; 
}
