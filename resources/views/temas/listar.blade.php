@extends('skeleton')

@section('title', 'Listar Temas')

@section('content')

    <div class="row col-md-12 ">
        <div class="panel panel-default">
            <div class="panel-heading">Home</div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Tema</th>
                        <th>Qtd de usuários interessados</th>
                        <th>Qtd de Perguntas</th>
                        <th>Qtd de Discussões</th>
                        <th>Qtd de Debates</th>
                        <th>Qtd de Paredões</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($temas as $tema)
                        <tr>
                            <td>{{$tema->tema}}</td>
                            <td>{{$tema->usuarios->count()}}</td>
                            <td>{{$tema->perguntas->count()}}</td>
                            <td>{{$tema->discussoes->count()}}</td>
                            <td>{{$tema->debates->count()}}</td>
                            <td>{{$tema->paredoes->count()}}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>



        </div>
    </div>


@endsection