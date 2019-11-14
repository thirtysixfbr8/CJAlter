<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $primaryKey = 'solicitacaoId';
    protected $fillable = ['solicitacaoId', 'mediadorId','clienteId','estado'];

    public function mediador()
    {
        return $this->belongsTo('App\User', 'mediadorId', 'id');
    }
    
    public function cliente()
    {
        return $this->belongsTo('App\User', 'clienteId', 'id');
    }

    public function seguros()
    {
        return $this->hasMany('App\Seguro', 'seguroId');
    }
    
    public function sinistros()
    {
        return $this->hasMany('App\Sinistro', 'sinistroId');
    }
}
