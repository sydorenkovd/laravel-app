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
<div class="row">
    <div class="col-sm-6">

           <?php print_r($tasks->photo) ?>

    </div>
    <div class="col-sm-6">

    </div>
</div>
    @endsection