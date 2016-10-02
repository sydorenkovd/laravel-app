<?php
/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 02.10.2016
 * Time: 21:41
 */
        ?>
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="btn btn-primary"><a style="color: white;" href="/tasks">Все задания</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
            <h1>Обновить</h1>

            <ul> @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            {!! Form::model($task, array('route' => ['task.update', $task->id], 'class' => 'form', 'method' => 'post')) !!}

            <div class="form-group">
                {!! Form::label('Название задания') !!}
                {!! Form::text('name', null,
        array('required', 'class'=>'form-control',
        'placeholder'=>'Введите задание')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Описание задания') !!}
                {!! Form::textarea('description', null,
        array('required', 'class'=>'form-control',
        'placeholder'=>'Введите полное описанние задания')) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Обновите задание', array('class'=>'btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    @endsection