@extends('layouts.app')
@section('content')
        @foreach($photo as $task)
            <h6>{{ $task->name }}</h6>
            <p>{{ $task->description }}</p>
        @endforeach
@endsection