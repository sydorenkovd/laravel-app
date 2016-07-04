@extends('layouts.master')

@section('content')

    <h1>{{ $photo->title }}</h1>
    <p class="lead">{{ $photo->description }}</p>
    <hr>

    <div class="row">
        <div class="col-md-6">
            {{--<a href="{{ route('photo') }}" class="btn btn-info">Back to all tasks</a>--}}
            {{--<a href="{{ route('photo.edit', $photo->id) }}" class="btn btn-primary">Edit Task</a>--}}
        </div>
        <div class="col-md-6 text-right">
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['photo.destroy', $photo->id]
            ]) !!}
            {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop