<?php

function gravatar_url($email, $size = 40)
{
    return 'https://www.gravatar.com/avatar/' . md5($email) . '?s=' . $size;
}

function gravatar_tag($email)
{
    return '<img src="' . gravatar_url($email) . '">';
}

function link_to_task(Task $task)
{
    return link_to_route('user.tasks.show', $task->title, [$task->user->username, $task->id]);
}