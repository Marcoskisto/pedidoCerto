@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class = "glyphicon glyphicon-menu-hamburger">Itens do Cardápio</i></h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Relacao dos Pratos e Bebidas
            <div class="pull-right">
                <a href="#" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
                <a href="#" class="btn btn-success"><i class="fas fa-plus"></i> Inserir um Novo Item</a>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table bordered table-hover">
                <thead>
                    <tr>
                        <td>ID</<td>
                        <td>Item</td>
                        <td>Descrição</td>
                        <td>Preço</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itens as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->titulo_prato}}</td>
                        <td>{{$item->desc_prato}}</td>
                        <td>{{$item->preco}}</td>
                        <td>
                        <a href="#" class="btn"><i class="far                fa-trash-alt"></i></a>
                        <a href="#" class="btn"><i class="fa fa-edit"></i></a></td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
