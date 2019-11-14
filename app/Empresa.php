<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $primaryKey = 'empresaId'; 
    protected $fillable = ['empresaId', 'actividade', 'nif'];

    public function userable()
    {
        return $this->morphOne('App\User', 'userable');
    }

    public function clienteable()
    {
        return $this->morphOne('App\Cliente', 'clienteable');
    }
}
