@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Test</div>

                    <div class="panel-body">
                        <ul>
                            @if(count($test) > 0)
                            @foreach($test as $tests)
                                <li>{{$tests}}</li>
                                @endforeach
                                @else
                                <li>
                                    There are no items
                                </li>
                                @endif
                        </ul>
                        <?php $tom = 'tili'; ?>
                        @include('errors.blood', ['tom' => $tom])
                        {!! Html::image('images/here.png') !!}
                    </div>
                    <a href="/about/contact" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
@endsection
