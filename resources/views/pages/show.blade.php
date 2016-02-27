@extends('template')

@section('content')

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$favor->titol}}</h1>
                <div class="thumbnail">
                    <iframe width="100%" height="350" frameborder="0" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?q={{$favor->lat}},{{$favor->long}}&hl=es;z=14&amp&output=embed">
                    </iframe>
                    
                    <div class="caption-full">
                        <p>{{ $favor->descripcio }}</p>
                        <hr>
                        <h3>Interesado? Descargate la app y ponte en contacto!</h3>
                        <a href="/" class="btn btn-block btn-primary">Descargar</a>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 estrellas
                        </p>
                    </div>
                </div>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-danger">Reportar</a>
                        <a class="btn btn-success">Deja un comentario</a>
                    </div>
                    
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">hace 2 horas</span>
                            <p>Al principio no me gustaba la idea de quedar extraño, pero me ha gustado mucho la experiencia. Lo recomiendo!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">hace 10 días</span>
                            <p>Muchas gracias! Me ha ayudado muchisimo</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            Carlos
                            <span class="pull-right">hace 1 semana</span>
                            <p>Lo recomiendo! 5/5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop