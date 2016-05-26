@extends('layouts.main')
@section('content')
    <div class="callout primary">
        <div class="row column">
            <a href="/">Back To Galleries</a>
            <h1>{{$gallery->name}}</h1>
            <p class="lead">{{$gallery->description}}</p>
        </div>
    </div>
    <div class="row small-up-2 medium-up-3 large-up-4">

    </div>

@stop