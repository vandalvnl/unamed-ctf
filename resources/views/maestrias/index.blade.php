@extends('layout.user')
@section('challs','active')
@section('title','Visualizar categorias')
@section('conteudo')
    <style>
        [data-style=primary] + .popover {
            background: #121212;
            border-radius: 0;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @if (Session::has('nova'))
        <div class="row">
            <div class="container">
                <div class="col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ Session::get('nova') }}
                    </div>
                </div>
            </div>
        </div>
    @endif


    <h2 class="page-title text-center">
        Maestrias
    </h2>
    <h2 class="text-center">
        <small><a data-toggle="collapse" data-target="#cadastrar">
                <i class="fa fa-plus"></i> Adicionar Maestria
            </a></small>
    </h2>
    <div class="collapse" id="cadastrar">
        <form class="form-horizontal" method="POST" action="{{route('maestriaCreate')}}">
            {{csrf_field()}}
            <label for="nova-maestria">Adicionar Maestria: </label>
            <input name="maestria" class="form-control" id="novamaestria" placeholder="Nova maestria..."
                   data-toggle="popover" data-trigger="hover" data-style="primary"
                   data-content="Item que caracteriza os jogadores" data-placement="left"/>
            <div class="espacos"></div>
            <input type="submit" class="button button-black" value="Criar Maestria">
        </form>
    </div>
    <div class="row">
        <div class="container">
            @foreach($maestrias as $maestria)
                <div class="col-xs-2 col-sm-3 col-lg-2 col-md-2">
                    <a data-toggle="modal" data-target="#{{$maestria->maestria}}" style="color:#fff;cursor:pointer;font-size: 1.4em">
                        <i class="fa fa-magic" aria-hidden="true"></i> {{ $maestria->maestria }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    @foreach($maestrias as $maestria)
        <div id="{{$maestria->maestria}}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{$maestria->maestria}}</h4>
                    </div>
                    <div class="modal-body">
                        <p class="paragrafos">
                            Lista de usuários
                        </p>
                    </div>
                    <div class="modal-footer">
                        <form action="{{url("/categorias/deletar/")}}" method="POST">
                            {{ csrf_field() }}
                            <a href="{{url("/categorias/editar/")}}"
                               class="button button-blue">Editar</a>
                            <input type="submit" class="button button-red" value="Deletar"/>
                            <button type="button" class="button button-black" data-dismiss="modal" value="">Fechar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script type='text/javascript'>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover();
        })
    </script>
@endsection