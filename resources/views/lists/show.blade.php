@extends('layouts.app')
@section('content')
    @if($photo->tasks->count() > 0)
        @foreach($photo->tasks as $task)
            <h6>{{ $task->name }}</h6>
            <p>{{ $task->description }}</p>
        @endforeach
    @endif
@endsection