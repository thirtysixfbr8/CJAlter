<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppResult 
{
    protected $result;
    protected $estado;
    protected $message;

    public function __construct(){
        $this->result = [];
    }

    public function goodResponse($result, $estado, $message){
        $this->result = $result;
        $this->estado = $estado;
        $this->message = $message;
    }

    public function badResponse($estado, $message){
        $this->estado = $estado;
        $this->message = $message;
    }

    public function getResponse(){
        return ['result'=>$this->result, 'estado'=>$this->estado, 'message'=>$this->message];
    }

    public function getResult(){
        return $this->result;
    }

    public function setResult($result){
        $this->result = $result;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        return $this->estado = $estado;
    }

    public function getMessage(){
        return $this->message;
    }

    public function setMessage($message){
        return $this->message = $message;
    }

}
