@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class="fas fa-fx fa-user"></i> Novo Pedido</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fas fa-fx fa-user"></i> Tela de inclusão de Pedidos
        </div>

       <div class="panel-body">
          <form method="post" action="{{ route('pedido.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
               <label for="numero_mesa">ID COMANDA <span class="text-red">*</span></label>
               <input type="text" name="id_comanda" id="id_comanda" class="form-control" value="{{ $comanda->id }}">
          </div>
          <div class="form-group">
               <label for="numero_mesa">ID ITEM <span class="text-red">*</span></label>
               <!-- <input type="text" name="id_item" id="id_item" class="form-control"> -->
               <select name="id_item" id="id_item" class="form-control">
               @foreach($item as $it)
                    <option value="{{ $it->id }}">{{ $it->titulo_prato }}</option>
               @endforeach
               </select>
          </div>

          <div class="form-group">
               <label for="nome_cliente">Quantidade <span class="text-red">*</span></label>
               <input type="text" name="quantidade" id="quantidade" class="form-control">
          </div>

         <a href="{{ route('pedido.index') }}" class="btn btn-default">
               <i class="fas fa-reply"></i> Voltar</a>
         <button type="submit" class="btn btn-success">
               <i class="fas fa-save"></i> Gravar
         </button>

          </form>
       </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
