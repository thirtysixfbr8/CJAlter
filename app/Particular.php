<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    protected $primaryKey = 'particularId';
    protected $fillable = ['particularId', 'dataNascimento', 'clienteId'];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'clienteId');
    }
}
