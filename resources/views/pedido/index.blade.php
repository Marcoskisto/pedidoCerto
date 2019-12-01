@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class = "glyphicon glyphicon-menu-hamburger">Pedidos Abertos</i></h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Relação de pedidos abertos
            <div class="pull-right">
                <a href="{{ route('pedido.index') }}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table bordered table-hover" >
                <thead>
                    <tr>
                        <td>ID</<td>
                        <td>ID COMANDA</td>
                        <td>ID ITEM</td>
                        <td>Quantidade</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                   @foreach($pedidos as $pedido)
                    <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->id_comanda}}</td>
                        <td>{{$pedido->id_item}}</td>
                        <td>{{$pedido->quantidade}}</td>
                        <td>{{$pedido->status}}</td>
                      <td>
                    <!--Botão de detalhes do registro-->
                        <a href="{{ route('pedido.show', $pedido->id) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>
                    <!--Botão de adição do registro-->
                        <a href="{{ route('pedido.edit', $pedido->id) }}" class="btn btn-xs btn-warning">
                            <i class="fas fa-fx fa-pencil-alt"></i>
                        </a>
                    <!--Botão de exclução do registro-->
                        <form action="{{ route('pedido.destroy', $pedido->id) }}" method="post" onsubmit="return confirm('Voce tem certeza de que quer excluir este registro ?');"
                        style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-xs btn-danger">
                                <i class="fas fa-fx fa-trash-alt"></i>
                            </button>
                        </form>
                        <!--Botão de Incluir Pedido na pedido-->
                        <a href="{{ route('pedido.create', $pedido->id) }}" class="btn btn-xs btn-warning">
                                <i class="glyphicon glyphicon-cutlery"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>

        </table>


    </div>


</div>

@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#table-pedido').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
} );
</script>
@stop
