@extends('layouts.master')

@section('content')
    <h1>All Tasks</h1>

    @foreach ($tasks as $task)
    <li>
        <a href="/{{ $task->user->username }}/tasks">{{ gravatar_tag($task->user->email) }}</a>
        {{ link_to_task($task) }}

        {{ Form::model($task, [
            'class'  => 'task-update-form',
            'method' => 'PATCH',
            'route'  => ['tasks.update', $task->id]
        ]) }}
        {{ Form::checkbox('completed') }}
        {{ Form::submit('Update') }}
        {{ Form::close() }}
    </li>
    @endforeach

    @if (isset($users))
        <h3>Add New Task</h3>
        @include('tasks/partials/_form')
    @endif
@stop