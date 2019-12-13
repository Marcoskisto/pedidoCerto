@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class = "glyphicon glyphicon-menu-hamburger">comandas Abertas</i></h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            Relação de comandas abertas
            <div class="pull-right">
                <a href="{{ route('comanda.index') }}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
                <a href="{{ route('comanda.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Inserir nova comanda</a>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table bordered table-hover" >
                <thead>
                    <tr>
                        <td>ID</<td>
                        <td>Mesa</td>
                        <td>Cliente</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comandas as $comanda)
                    <tr>
                        <td>{{$comanda->id}}</td>
                        <td>{{$comanda->numero_mesa}}</td>
                        <td>{{$comanda->nome_cliente}}</td>
                        <td>{{$comanda->status}}</td>
                      <td>
                    <!--Botão de detalhes do registro-->
                        <a href="{{ route('comanda.show', $comanda->id) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>
                    <!--Botão de edição do registro-->
                        <a href="{{ route('comanda.edit', $comanda->id) }}" class="btn btn-xs btn-warning">
                            <i class="fas fa-fx fa-pencil-alt"></i>
                        </a>
                    <!--Botão de exclução do registro-->
                        <form action="{{ route('comanda.destroy', $comanda->id) }}" method="post" onsubmit="return confirm('Voce tem certeza de que quer excluir este registro ?');"
                        style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-xs btn-danger">
                                <i class="fas fa-fx fa-trash-alt"></i>
                            </button>
                        </form>
                    <!--Botão de Incluir Pedido na Comanda-->
                    <a href="{{ route('addpedido',$comanda->id) }}" class="btn btn-xs btn-warning" >
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
    $('#table-comanda').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
} );
</script>
@stop
