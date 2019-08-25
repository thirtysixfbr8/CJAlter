<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{
    protected $primaryKey = 'modalidadeId';
    protected $fillable = ['modalidadeId', 'modalidade'];
}
