@extends('layouts.main')
@section('content')
    <div class="callout primary">
        <div class="row column">
            <a href="/gallery/show/{{$photo->gallery_id}}">Back to Gallery</a><br>
            <?php if(Auth::check()) : ?>
            <a class="button" href="/photo/edit/{{$photo->id}}">Edit photo</a>
            <?php endif; ?>
            <?php if(Auth::check()) : ?>
            <a class="button" href="/photo/delete/{{$photo->id}}">Delete photo</a>
            <?php endif; ?>
            <h1>{{$photo->title}}</h1>
            <p class="lead">Description: {{$photo->description}}</p>
            <p class="lead">Location: {{$photo->location}}</p>
        </div>
    </div>
    <div class="row small-up-2 medium-up-3">
<div class="main">
    <img class="main-img" src="/images/{{$photo->image}}">
</div>
    </div>

@stop