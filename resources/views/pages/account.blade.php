@extends('template')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Iniciar Sessión</h2>
                <hr>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <button class="btn btn-primary">Acceder</button>
                </form>
            </div>
            <div class="col-sm-6">
                <h2>Crear nueva cuenta</h2>
                <hr>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control">
                    </div>
                    <button class="btn btn-primary">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

@stop