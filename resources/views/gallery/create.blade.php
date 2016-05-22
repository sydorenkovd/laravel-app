@extends('layouts.main')
@section('content')
    <div class="callout primary">
        <div class="row column">
            <h1>Photo galleries</h1>
            <p class="lead">Create a gallery and start uploading</p>
        </div>
    </div>
    <div class="row">

        {!! Form::open(['action' => 'GalleryController@store', 'enctype' => 'multipart/form-data']) !!}
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', $value = null, $attributes = ['placeholder' => 'Gallery Name', 'name' => 'name']) !!}
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', $value = null, $attributes = ['placeholder' => 'Gallery Description', 'description' => 'description']) !!}
        {!! Form::label('cover_image', 'Image') !!}
        {!! Form::file('cover_image') !!}
        {!! Form::submit('Submit', $attributes = ['class' => 'button']) !!}
        {!! Form::close() !!}
    </div>

@stop