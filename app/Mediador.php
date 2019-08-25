<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mediador extends Model
{
    protected $primaryKey = 'mediadorId'; 
    protected $fillable = ['mediadorId', 'dataNascimento', 'userId'];

    public function solicitacaos()
    {
        return $this->hasMany('App\Solicitacao', 'solicitacaoId');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'userId');
    }
}
