<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    protected $primaryKey = 'seguroId';
    protected $fillable = ['seguroId', 'solicitacaoId', 'modalidadeId'];

    public function modalidade(){
         return $this->hasOne('App\Modalidade', 'modalidadeId');
    }
}
