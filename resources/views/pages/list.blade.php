@extends('template')

@section('content')

	<div class="container">
    <h1>Busca un favor en nuestra comunidad</h1>
    <hr>
    <div id="products" class="row list-group">
        @foreach($favors as $favor)
        <div class="item col-xs-4 col-lg-4">
            <div class="thumbnail">
                <iframe width="355" height="177" frameborder="0" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?q={{$favor->lat}},{{$favor->long}}&hl=es;z=14&amp&output=embed">
                </iframe>
                <!-- <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" /> -->
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        {{$favor->titol}}
                        <span class="label label-warning pull-right">
                            @if($favor->demanar == 1)
                                Pido
                            @else
                                Ofrezco
                            @endif
                        </span>
                    </h4>
                    <p class="group inner list-group-item-text">
                        {{$favor->descripcio}}</p>

                        <span class="label label-default">{{$favor->categoria}}</span>

                        <a class="btn btn-primary btn-block" href="{{action('HomeController@show', [$favor->id])}}">+Info</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script>
    $('.products').masonry({
        itemSelector: '.item',
    })
</script>
@stop