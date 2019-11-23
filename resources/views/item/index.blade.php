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
                <a href="{{ route('item.index') }}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
                <a href="{{ route('item.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Inserir um Novo Item</a>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table bordered table-hover" >
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
                    <!--Botão de detalhes do registro-->
                        <a href="{{ route('item.show', $item->id) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>
                    <!--Botão de adição do registro-->
                        <a href="{{ route('item.edit', $item->id) }}" class="btn btn-xs btn-warning">
                            <i class="fas fa-fx fa-pencil-alt"></i>
                        </a>
                    <!--Botão de exclução do registro-->
                        <form action="{{ route('item.destroy', $item->id) }}" method="post" onsubmit="return confirm('Voce tem certeza de que quer excluir este registro ?');"
                        style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-xs btn-danger">
                                <i class="fas fa-fx fa-trash-alt"></i>
                            </button>
                        </form>
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
    $('#table-item').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
} );
</script>
@stop
