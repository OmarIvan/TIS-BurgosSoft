@extends('admin.layout')

@section('content')
    <h1>dashboard</h1>
    <p>usuario autenticado:{{auth()->user()->name}}</p>
@stop