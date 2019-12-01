@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class="fas fa-fx fa-user"></i> Nova Comanda</h1>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fas fa-fx fa-user"></i> Tela de inclusão de nova comanda
        </div>

       <div class="panel-body">
          <form method="post" action="{{ route('comanda.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
               <label for="numero_mesa">Nº da Mesa <span class="text-red">*</span></label>
               <input type="text" name="numero_mesa" id="numero_mesa" class="form-control">
          </div>

          <div class="form-group">
               <label for="nome_cliente">Cliente <span class="text-red">*</span></label>
               <input type="text" name="nome_cliente" id="nome_cliente" class="form-control">
          </div>
           <!--
          <div class="form-group">
               <label for="status">Status</label>
               <input type="text" name="status" id="status" class="form-control">
          </div>
          -->
         <a href="{{ route('comanda.index') }}" class="btn btn-default">
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
