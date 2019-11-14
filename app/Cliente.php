<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'clienteId';  
    protected $fillable = ['clienteId'];
    
    public function solicitacaos()
    {
        return $this->hasMany('App\Solicitacao', 'solicitacaoId');
    }

    public function userable()
    {
        return $this->morphOne('App\User', 'userable');
    }
    
    public function clienteable()
    {
        return $this->morphTo();
    }
}
