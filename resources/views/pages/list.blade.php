@extends('template')

@section('content')

	<div class="container">
    <div class="well well-sm">
        <strong>Category Title</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
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
                        {{$favor->titol}}</h4>
                    <p class="group inner list-group-item-text">
                        {{$favor->descripcio}}</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <span class="label label-primary">{{$favor->categoria}}</span>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success pull-right" href="{{action('HomeController@show', [$favor->id])}}">+Info</a>
                        </div>
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