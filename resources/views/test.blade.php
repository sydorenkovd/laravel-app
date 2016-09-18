@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Test</div>

                    <div class="panel-body">
                        <ul>
                            @forelse($test as $tests)
                                <li>{{$tests}}</li>
                                @empty
                            <li>
                                There are no items
                            </li>
                                @endforelse
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection