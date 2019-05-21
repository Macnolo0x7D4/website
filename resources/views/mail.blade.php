@extends('layouts.layout2')
@section('text')
<h1 class="h3 mb-3 font-weight-normal">Mensaje de Soporte</h1>
@endsection
@section('content')
<p><strong>Usuario: </strong> {{$msg['user']}}</p>
<p><strong>Email: </strong> {{$msg['email']}}</p>
<p><strong>Contenido: </strong> {{$msg['content']}}</p>
@endsection
@section('title')
    Soporte
@endsection