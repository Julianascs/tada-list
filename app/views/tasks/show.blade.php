@extends('layouts.master')

@section('content')

    <h1>{{ $task->title }}</h1>
    <section>{{ $task->body }}</section>

    <p>{{ link_to('/', 'Go Back') }}</p>
@stop