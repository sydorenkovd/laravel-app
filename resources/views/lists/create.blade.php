<?php
/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 27.09.2016
 * Time: 20:55
 */
?>
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-offset-2 col-sm-8">
        <h1>Create a New List</h1>

        <ul> @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        {!! Form::open(array('route' => 'lists.store', 'class' => 'form')) !!}

        <div class="form-group">
            {!! Form::label('List Title') !!}
            {!! Form::text('title', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'San Juan Vacation')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('List Description') !!}
            {!! Form::textarea('description', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Things to do before leaving for vacation')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create List', array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>

@stop