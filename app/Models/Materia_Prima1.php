<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia_Prima1 extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'Primario_Id';
    protected $guarded = ["id"]; 
    protected $table ='materia_prima';
}