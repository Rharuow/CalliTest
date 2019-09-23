<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    CalliTest
                </div>

                <div class="links">
                    <a href="{{ route('adm') }}">Administradores</a>
                    <a href="{{ route('members') }}">Membros</a>
                    <a href="{{ route('animals') }}">Animais</a>
                    <a href="{{ route('projects') }}">Projetos</a>
                    <a href="{{ route('tests') }}">Testes</a>
                    <a href="{{ route('bateries') }}">Baterias</a>
                    <a href="{{ route('try_bateries') }}">Tentativas de baterias</a>
                    <a href="{{ route('resultBateries') }}">Resultados-Baterias</a>
                    <a href="{{ route('try_result_bateries') }}">Resultados-tentativa-Baterias</a>
                    <a href="{{ route('trainings') }}">Treinamento</a>
                    <a href="{{ route('try_trainings') }}">Tentativas de Treinamento</a>
                    <a href="{{ route('result_trainings') }}">Resultados-Treinamento</a>
                    <a href="{{ route('try_result_trainings') }}">Resultados-tentativa-Treinamento</a>
                </div>
            </div>
        </div>
    </body>
</html>
