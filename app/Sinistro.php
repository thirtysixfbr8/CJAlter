<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sinistro extends Model
{
    protected $primaryKey = 'sinistroId';
    protected $fillable = ['sinistroId', 'solicitacaoId'];
}
