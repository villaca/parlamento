@extends('skeleton')

@section('title', 'Home')

@section('content')

    <aside class="col-md-2">
        <img  src="{{ asset('img/prfl/'.$user->foto) }}" alt="Foto do perfil">
    </aside>


    <div class="row col-md-10 ">
        <p class="welcome">Seja bem-vindo, {{$user->nome}}</p>

        <div class="panel panel-info">
            <div class="panel-heading">Temas em que você está interessado</div>

            <ul class="list-group">
                @foreach($user->temas as $tema)

                    <li class="list-group-item"><span class="sublista">{{$tema->tema}}</span>
                        <ul class="lista">
                            <li><span class="sublista">Perguntas</span>
                                <ul class="lista">
                                    @foreach($tema->perguntas as $pergunta)
                                        <li>{{$pergunta->pergunta}}</li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><span class="sublista">Discussões</span>
                                <ul class="lista">
                                    @foreach($tema->discussoes as $discussao)
                                        <li>{{$discussao->assunto}}</li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><span class="sublista">Debates</span>
                                <ul class="lista">
                                    @foreach($tema->debates as $debate)
                                        <li>{{$debate->assunto}}</li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><span class="sublista">Paredões</span>
                                <ul class="lista">
                                    @foreach($tema->paredoes as $paredao)
                                        <li>{{$paredao->emparedado}}</li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>


                    </li>

                @endforeach
            </ul>
        </div>
    </div>


@endsection