@extends('layouts.backoffice')

@section('sidebar')
    @parent
@endsection

@section('content')
<!--Ainda em Desenvolvimento-->
<div class="container"> <!--Pegar dados dos users-->
    <div class="row">
    <div class="col-md-3">
        <span>{{$user->name}}</span>
        <span>{{$user->email}}</span>
        <!--span>{{$user->birth}}Se o perfil for de um mediador </span-->
        <span>{{$user->telemovel}}</span>
        <button class="btn btn-danger">Editar Dados</button> <!--Chamará a model com os dados do Utilizador-->
        </div>
    </div>
</div>

@stop