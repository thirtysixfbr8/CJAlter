<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    protected $primaryKey = 'particularId';
    protected $fillable = ['particularId', 'dataNascimento'];

    public function clienteable()
    {
        return $this->morphOne('App\Cliente', 'clienteable');
    }
}
