@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Detalhes da pedido</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Pedidos Abertos
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td class="col-md-2">ID</td>
                    <td class="col-md-10">{{ $pedido->id_comanda }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Número da Comanda</td>
                    <td class="col-md-10">{{ $pedido->id_item }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Nome do Cliente</td>
                    <td class="col-md-10">{{ $pedido->quantidade }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Status</td>
                    <td class="col-md-10">{{ $pedido->status }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{ route('pedido.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
</div>



@stop

@section('css')

@stop

@section('js')

@stop