<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $primaryKey = 'solicitacaoId';
    protected $fillable = ['solicitacaoId', 'mediadorId','clienteId','estado'];

    public function seguros()
    {
        return $this->hasMany('App\Seguro', 'seguroId');
    }
    
    public function sinistros()
    {
        return $this->hasMany('App\Sinistro', 'sinistroId');
    }
}
