<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $primaryKey = 'perfilId';  
    protected $fillable = ['perfilId','perfil']; 
}
