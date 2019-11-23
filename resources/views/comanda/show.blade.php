@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Detalhes da comanda</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes da Comanda
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td class="col-md-2">ID</td>
                    <td class="col-md-10">{{ $comanda->id }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Número da Comanda</td>
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
    </div>

    <div class="panel-footer">
        <a href="{{ route('comanda.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
</div>



@stop

@section('css')

@stop

@section('js')

@stop