<?php
/**
 * Created by PhpStorm.
 * User: Виктор Сидоренко
 * Date: 02.10.2016
 * Time: 18:48
 * @var App\Task $tasks
 */
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                @forelse($tasks as $task)
                    <div class="row padding-header-10 padding-bottom-10 underline">
                        <div class="col-sm-offset-2 col-sm-4">
                            {{$task->name}} <a href="/task/edit/{{$task->id}}"> <i class="fa fa-edit"></i></a>
                        </div>
                        <div class="col-sm-offset-1 col-sm-5">
                            {{$task->description}}
                        </div>
                    </div>
                    <div class="row">

                    </div>
@empty
                    <p>нету заданий</p>
                @endforelse

            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>

    @endsection