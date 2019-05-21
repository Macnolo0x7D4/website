@extends('layouts.layout3')
@section('main_form')
<form action="{{ route('support') }}" method="POST" class="form-signin">
    @csrf
    <div class="text-center mb-4">
        <img class="mb-4" src="/img/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Contacto</h1>
        <p>Ingresa los datos del problema.</p>
    </div>

    <div class="form-label-group">
        <input type="text" name="user" id="inputUser" class="form-control" placeholder="Usuario" required autofocus>
        <label for="inputUser">Usuario</label>
    </div>
        <div class="form-label-group">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <label for="inputEmail">Email</label>
        </div>
    <div class="form-label-group">
        <textarea id="inputDescription" name="content" class="form-control" maxlength=105 placeholder="Describe tu problema."></textarea>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" id="submitButton">Enviar</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2019</p>
</form>
@endsection