@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Detalhes do item</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes do Prato
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td class="col-md-2">ID</td>
                    <td class="col-md-10">{{ $item->id }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Nome do Prato</td>
                    <td class="col-md-10">{{ $item->titulo_prato }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Descrição</td>
                    <td class="col-md-10">{{ $item->desc_prato }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Preço</td>
                    <td class="col-md-10">{{ $item->preco }}</td>
                </tr>
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