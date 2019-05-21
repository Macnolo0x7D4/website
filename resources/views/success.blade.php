@extends('layouts.layout2')
@section('text')
<h1 class="h3 mb-3 font-weight-normal">Mensaje Enviado</h1>
@endsection
@section('content')
<p><strong>Usuario: </strong> {{$msg['user']}}</p>
<p><strong>Email: </strong> {{$msg['email']}}</p>
<p><strong>Contenido: </strong> {{$msg['content']}}</p>
@endsection
@section('button_group')
    <a class="btn btn-primary btn-lg" href="./" role="button">Ir a Inicio</a>
@endsection
@section('title')
    Soporte
@endsection