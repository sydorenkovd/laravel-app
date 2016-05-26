@extends('layouts.main')
@section('content')
    <div class="callout primary">
        <div class="row column">
            <a href="/gallery/show/{{$photo->gallery_id}}">Back to Gallery</a>
            <h1>{{$photo->title}}</h1>
            <p class="lead">{{$photo->description}}</p>
            <p class="lead">Location: {{$photo->location}}</p>
        </div>
    </div>
    <div class="row small-up-2 medium-up-3">
<div class="main">
    <img class="main-img" src="/images/{{$photo->image}}">
</div>
    </div>

@stop