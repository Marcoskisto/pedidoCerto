@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class="fas fa-fx fa-user"></i> Edicao dos dados da Comanda</h1>
@stop

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fas fa-fx fa-user"></i> Tela de alteraçao da Comanda
        </div>

       <div class="panel-body">
          <form method="post" action="{{ route('comanda.update', $comanda->id) }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">

          <div class="form-group">
               <label for="titulo_prato">Número da Mesa <span class="text-red">*</span></label>
               <input type="text" name="titulo_prato" id="titulo_prato" class="form-control" value="{{ $comanda->numero_mesa }}">
          </div>

          <div class="form-group">
               <label for="desc_prato">Nome do Cliente <span class="text-red">*</span></label>
               <input type="text" name="desc_prato" id="creci" class="form-control" value="{{ $comanda->nome_cliente }}">
          </div>

          <div class="form-group">
               <label for="preco">Status</label>
               <input type="text" name="preco" id="preco" class="form-control" value="{{ $comanda->status }}">
          </div>
          <a href="{{ route('comanda.index') }}" class="btn btn-default">
               <i class="fas fa-reply"></i> Voltar
          </a>

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
