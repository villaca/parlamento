@extends('skeleton')

@section('title', 'Home')

@section('content')

    <aside class="col-md-2">
        <img  src="{{ asset('img/prfl/'.$user->foto) }}" alt="Foto do perfil">
    </aside>


    <div class="row col-md-10 ">
        <div class="panel panel-default">
            <div class="panel-heading">Home</div>

            <div class="panel-body">
                hello hello, {{$user->nome}}
            </div>
        </div>
    </div>


@endsection