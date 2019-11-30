@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class="fas fa-fx fa-user"></i> Inclusao de Itens</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fas fa-fx fa-user"></i> Tela de cadastramento de itens do Cardápio
        </div>

       <div class="panel-body">
          <form method="post" action="{{ route('item.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
               <label for="titulo_prato">Nome Item ou Prato <span class="text-red">*</span></label>
               <input type="text" name="titulo_prato" id="titulo_prato" class="form-control">
          </div>

          <div class="form-group">
               <label for="desc_prato">Descrição <span class="text-red">*</span></label>
               <input type="text" name="desc_prato" id="desc_prato" class="form-control">
          </div>

          <div class="form-group">
               <label for="preco">Preço</label>
               <input type="text" name="preco" id="preco" class="form-control">
          </div>
         <a href="{{ route('item.index') }}" class="btn btn-default">
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
