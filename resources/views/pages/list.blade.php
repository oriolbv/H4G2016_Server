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
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        {{$favor->titol}}</h4>
                    <p class="group inner list-group-item-text">
                        {{$favor->descripcio}}</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                {{$favor->categoria}}</p>
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

@stop