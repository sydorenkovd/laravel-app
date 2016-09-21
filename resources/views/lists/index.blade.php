@extends('layouts.app')
@section('content')
    {{--@foreach($photos as $photo)--}}
        <div class="row">
            <div class="col-sm-offset-6 col-sm-6">
                <h1>{{$photos->render()}}</h1>
            </div>
        </div>

    {{--@endforeach--}}
    @endsection