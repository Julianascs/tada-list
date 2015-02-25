<?php

class UserTasksController extends BaseController
{
    public function index($username)
    {
        $tasks = Task::byUsername($username);

        return View::make('tasks.index', compact('tasks'));
    }

    public function show($username, $id)
    {
        $task = Task::find($id, $username);

        return View::make('tasks.show', compact('task'));
    }
}