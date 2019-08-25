<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $primaryKey = 'empresaId'; 
    protected $fillable = ['empresaId', 'actividade', 'nif', 'clienteId'];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'clienteId');
    }
}
