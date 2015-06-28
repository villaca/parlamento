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
                    <li><a href="/parlamento/public/home" alt="Página inicial">Home</a></li>
                    <li>Temas</li>
                    <li>Debatedores Seguidos</li>
                    <li>Mural de recados</li>
                    <li>Alertas</li>
                    <li><a href="/parlamento/public/config" alt="Configurações">Configurações</a></li>
                    <li>logout</li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>

        </main>
        <footer>

        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>