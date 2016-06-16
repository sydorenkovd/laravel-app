@extends('layouts.main')
@section('content')
    <div class="callout primary">

    </div>
    <div class="row small-up-2 medium-up-3 large-up-4">
        @if($photoss->count())
        <?php foreach($photoss as $photo) : ?>
        <div class="column">
            <a href="/photo/details/{{$photo->id}}">
                <img class="thumbnail" src="/images/{{$photo->image}}">
            </a>
            <h5>{{$photo->title}}</h5>
            <p>{{$photo->description}}</p>
        </div>
        <?php endforeach; ?>
    </div>
            @include('pagination.custom', ['paginator' => $photoss])
        @endif


@stop