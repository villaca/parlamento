<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <title>Parlamento - @yield('title')</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <ul class="container">
                    <li><a href="/parlamento/public/home" ><img src="{{ asset('img/home3.png')}}" class="homeIcon" alt="Página inicial"></a></li>
                    <li class="col-md-offset-5"><a href="/parlamento/public/temas">Temas</a></li>
                    <li><a href="/parlamento/public/relevantes" >Debatedores Seguidos</a></li>
                    <li><a href="/parlamento/public/recados" >Mural de recados</a></li>
                    <li><a href="/parlamento/public/alertas" >Alertas</a></li>
                    <li><a href="/parlamento/public/config" >Configurações</a></li>
                    <li>logout</li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container principal">
                @yield('content')
            </div>

        </main>
        <footer>
            <div class="container">
                <span>© Copyright Daniel Villaça 2015</span>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/menus.js') }}"></script>

    </body>
</html>