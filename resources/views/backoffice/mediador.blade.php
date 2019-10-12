@extends('layouts.backoffice')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div id="app">
        <app></app>
        <example-component></example-component>
        <profile-component></profile-component>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
@stop 

   
    

  
    
