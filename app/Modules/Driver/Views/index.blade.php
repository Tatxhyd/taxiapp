@extends('layouts.master')
@section('content') 
@foreach($drivers as $task)
    <h3>{{ $task->name }}</h3>
    <p>{{ $task->email}}</p>
    <p>
        <a href="" class="btn btn-info">View Task</a>
        <a href="" class="btn btn-primary">Edit Task</a>
    </p>
    <hr>
@endforeach
@stop