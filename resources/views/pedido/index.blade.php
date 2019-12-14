@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>GESTÃO DE PEDIDOS</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
           <i class="fas fa-fire"></i> COZINHA (EM PREPARAÇÃO)
        </div>

        <div class="panel-body">
            <table class="table table-striped table bordered table-hover" >
                <thead>
                    <tr>
                        <td>ID</<td>
                        <td>COMANDA</td>
                        <td>Prato</td>
                        <td>Quantidade</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                   @foreach($pedidos as $pedido)
                   @if($pedido->status === 'PREPARACAO' )
                    <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->id_comanda}}</td>
                        <td>{{$pedido->titulo_prato}}</td>
                        <td>{{$pedido->quantidade}}</td>
                        <td>{{$pedido->status}} <i class="far fa-play-circle"></i></td>
                      <td>
                    <!--Botão de detalhes do registro
                        <a href="{{ route('pedido.show', $pedido->id) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>-->
                    <!--Botão de Status PRONTO do PEDIDO-->
                        <a href="{{ route('statusPronto', $pedido->id) }}" class="btn btn-xs btn-success">
                            <i class="fas fa-fx fa-check"></i> DESPACHAR P/ MESA
                        </a>
                    <!--Botão de exclução do registro-->
                        <form action="{{ route('pedido.destroy', $pedido->id) }}" method="post" onsubmit="return confirm('Voce tem certeza de que quer excluir este registro ?');"
                        style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-xs btn-danger">
                                <i class="fas fa-fx fa-ban"></i> EXCLUIR
                            </button>
                        </form>

                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <i class="far fa-bell"></i>  GARÇOM (PEDIDOS PRONTOS)
        </div>

        <div class="panel-body">
            <table class="table table-striped table bordered table-hover" >
                <thead>
                    <tr>
                        <td>ID</<td>
                        <td>COMANDA</td>
                        <td>PRATO</td>
                        <td>Quantidade</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                   @foreach($pedidos as $pedido)
                   @if($pedido->status === 'PRONTO' )
                    <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->id_comanda}}</td>
                        <td>{{$pedido->titulo_prato}}</td>
                        <td>{{$pedido->quantidade}}</td>
                        <td>{{$pedido->status}} <i class="far fa-check-circle"></i></td>
                      <td>
                    <!--Botão de detalhes do registro
                        <a href="{{ route('pedido.show', $pedido->id) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>
                        -->
                    <!--Botão de exclução do registro-->
                        <form action="{{ route('pedido.destroy', $pedido->id) }}" method="post" onsubmit="return confirm('Voce tem certeza de que quer excluir este registro ?');"
                        style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-xs btn-danger">
                                <i class="fas fa-fx fa-ban"></i> EXCLUIR
                            </button>
                        </form>

                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>

            </table>
        </div>

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
