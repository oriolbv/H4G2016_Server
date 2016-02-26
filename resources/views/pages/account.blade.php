@extends('template')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Iniciar Sessión</h2>
                <hr>
                <form action="/web/login" method="POST">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <button class="btn btn-primary">Acceder</button>
                </form>
            </div>
            <div class="col-sm-6">
                <h2>Crear nueva cuenta</h2>
                <hr>
                <form action="/web/register" method="POST">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <button class="btn btn-primary">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

@stop