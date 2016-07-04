@extends('layouts.main')

@section('content')

    <h1>Editing "{{ $photo->title }}"</h1>
    {{--<p class="lead">Edit and save this task below, or <a href="{{ route('home') }}">go back to all tasks.</a></p>--}}
    <hr>

{{--    @include('partials.alerts.errors')--}}


    {!! Form::model($photo, [
        'method' => 'PATCH',
        'route' => ['photo.update', $photo->id]
    ]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('location', 'Location:', ['class' => 'control-label']) !!}
        {!! Form::text('location', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image:', ['class' => 'control-label']) !!}
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop