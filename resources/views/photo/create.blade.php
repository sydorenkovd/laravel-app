@extends('layouts.main')
@section('content')
    <div class="callout primary">
        <div class="row column">
            <h1>Upload photo</h1>
            <p class="lead">Upload photo to the galery</p>
        </div>
    </div>
    <div class="row">

        {!! Form::open(['action' => 'PhotoController@store', 'enctype' => 'multipart/form-data']) !!}
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', $value = null, $attributes = ['placeholder' => 'Photo Title', 'name' => 'title']) !!}
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', $value = null, $attributes = ['placeholder' => 'Gallery Description', 'description' => 'description']) !!}
        {!! Form::text('description', $value = null, $attributes = ['placeholder' => 'Gallery Description', 'description' => 'description']) !!}
        {!! Form::label('cover_image', 'Image') !!}
        {!! Form::file('cover_image') !!}
        {!! Form::submit('Submit', $attributes = ['class' => 'button']) !!}
        {!! Form::close() !!}
    </div>

@stop