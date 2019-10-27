@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class = "glyphicon glyphicon-menu-hamburger"> Incluir Item</i></h1>
@stop

@section('content')
   {!! Form::open(['action' => 'ItemController@store', 'method' => 'POST']) !!}

    {!! Form::close() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
