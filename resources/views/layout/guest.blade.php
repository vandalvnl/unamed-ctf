<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{!! asset('/css/beautify.min.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('/css/font-awesome.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('/css/main.css') !!}" />
    <!-- Scripts -->
    <script src="{!! asset('/js/beautify.min.js') !!}"></script>
    <!-- Fonts -->
</head>
<body>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <i class="fa fa-flag fa-lg"></i>
                        C.T.F
                    </a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="" class=""><i class="fa fa-home" aria-hidden="true"></i> Inicial<span class="sr-only">(current)</span></a></li>
                    <li><a href="" class=""><i class="fa fa-desktop" aria-hidden="true"></i> Classificação</a></li>
                    <li><a href="{!! route('register') !!}"><i class="fa fa-plus" aria-hidden="true"></i> Registrar</a></li>
                    <li><a href="{!! route('login') !!}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<div class="conteiner-fluid">
    @yield('conteudo')
    <div class="espacos"></div>
    <div class="espacos"></div>
    @include('layout.footer')
</div>
</body>
</html>