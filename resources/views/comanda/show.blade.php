@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>DETALHES DA COMANDA</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        COMANDA Nº {{$comanda->id  }}
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td class="col-md-2">Número da Mesa</td>
                    <td class="col-md-10">{{ $comanda->numero_mesa }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Nome do Cliente</td>
                    <td class="col-md-10">{{ $comanda->nome_cliente }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Status</td>
                    <td class="col-md-10">{{ $comanda->status }}</td>
                </tr>
            </table>
        </div>
    <div class="panel panel-default">
        <div class="panel-heading">
                PEDIDOS REALIZADOS
            </div>
            <div class="panel-body">
                <table class="table table-striped table bordered table-hover" >
                    <thead>
                        <tr>
                            <td>ID PEDIDO</<td>
                            <td>PRATO</td>
                            <td>QUANTIDADE</td>
                            <td>STATUS</td>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($pedidos as $pedido)
                        <tr>
                            <td>{{$pedido->id}}</td>
                            <td>{{$pedido->desc_prato}}</td>
                            <td>{{$pedido->quantidade}}</td>
                            <td>{{$pedido->status}}</td>
                          <td>
                        <!--Botão de edição do registro-->
                            <a href="{{ route('pedido.edit', $pedido->id) }}" class="btn btn-xs btn-warning">
                                <i class="fas fa-fx fa-pencil-alt"></i>
                            </a>
                        <?
                            if(strstr($pedido->status,"PREPARACAO")){
                            '
                            <!--Botão de exclução do registro-->
                            <form action="{{ route('pedido.destroy', $pedido->id) }}" method="post" onsubmit="return confirm('Voce tem certeza de que quer excluir este registro ?');"
                            style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-xs btn-danger">
                            <i class="fas fa-ban"></i>
                            </button>
                            </form>
                            '
                            }

                        ?>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
     <div class="panel-footer">
        <a href="{{ route('item.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
</div>




@stop

@section('css')

@stop

@section('js')

@stop
