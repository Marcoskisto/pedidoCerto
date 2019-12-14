@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>DETALHES DA COMANDA</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        COMANDA Nº {{$comanda->id}}
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
                            <td>PREÇO UNIT</td>
                            <td>PREÇO TOTAL</td>
                            <td>STATUS</td>
                        </tr>
                    </thead>
                    <tbody>

                       @foreach($pedidos as $pedido)
                        <tr>
                            <td>{{$pedido->id}}</td>
                            <td>{{$pedido->titulo_prato}}</td>
                            <td>{{$pedido->quantidade}}</td>
                            <td>{{$pedido->preco}}</td>
                            <td>{{$pedido->preco_total}}</td>
                            <td>{{$pedido->status}}</td>
                          <td>
                        <!--Botão de edição do registro-->
                           

                            <!--Botão de exclução do registro-->
                           

                            </td>
                        </tr>

                        @endforeach
                    </tbody>

                </table>
        <b>VALOR TOTAL = R$ {{$total}}</b>
        </div>
    </div>
     <div class="panel-footer">
        <a href="{{ route('comanda.index') }}" class="btn btn-primary">
            <i class="fas fa-reply"></i> Voltar
        </a>
        <a href="{{ route('addpedido',$comanda->id) }}" class="btn btn-success" >
            <i class="fas fa-plus"> </i> Add Pedido
        </a>

        <a href="{{ route('pedido.index') }}" class="btn btn-info" >
            <i class="fas fa-list"> </i> Gerenciar Pedidos
        </a>
    </div>
</div>




@stop

@section('css')

@stop

@section('js')

@stop
