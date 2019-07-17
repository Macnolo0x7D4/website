@extends('layouts.layout1')
@section('main')
<div class="alert alert-warning" role="alert">
    WIP - Trabajo en Progreso. Posibles errores!!
</div>
<div class="text-justify">
    <div class="card shadow-sm">
      <img src="/img/volcano.png" class="card-img-top"  alt="">
        <h5 class="card-header">Nuevo</h5>
        <div class="card-body">
            <h5 class="card-title">Conoce Volcano! El nuevo juego de Macnolo Tech</h5>
            <p class="card-text">Hola usuario! Entra y prueba la nightly de Volcano!</p>
            <a href="/volcano" role="button" class="btn btn-link">Jugar</a>
        </div>
    </div>
    <div class="card shadow-sm">
        <h5 class="card-header">Destacado</h5>
        <div class="card-body">
            <h5 class="card-title">AutoLocker</h5>
            <p class="card-text">Conjunto de programas para volver a tu Arduino un sistema de seguridad para puertas.</p>
            <a href="/autolocker" role="button" class="btn btn-link">Ver más</a>
        </div>
    </div>
    <div class="card shadow-sm">
        <h5 class="card-header">Nuevo</h5>
        <div class="card-body">
            <h5 class="card-title">Iniciando contenido...</h5>
            <p class="card-text">Hola usuario! Esto es Macnolo Tech. Es todavia un pagina en proceso!</p>
        </div>
    </div>
</div>
@endsection
@section('title')
    Inicio
@endsection
