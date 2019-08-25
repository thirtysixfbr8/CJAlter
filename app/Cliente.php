<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'clienteId';  
    protected $fillable = ['clienteId','userId'];
    
    public function solicitacaos()
    {
        return $this->hasMany('App\Solicitacao', 'solicitacaoId');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'userId');
    }
}
