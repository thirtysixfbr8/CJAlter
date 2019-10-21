@extends('layouts.backoffice')

@section('sidebar')
    @parent
@endsection

@section('content')
<section id="content">
    <div id="app">
        <router-view :user="{{ json_encode($user) }}" :app-contents="{{ json_encode($appContents) }}"></router-view>
    </div> 
</section>

@stop

    

   





  
    
