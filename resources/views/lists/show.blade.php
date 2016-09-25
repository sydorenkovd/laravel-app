@extends('layouts.app')
@section('content')
    @if($photo->tasks->count() > 0)
        @foreach($photo->comments as $task)
            <h6>{{ $task->body }}</h6>
        @endforeach
    @endif
@endsection