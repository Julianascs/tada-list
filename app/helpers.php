<?php

function gravatar_url($email, $size = 40)
{
    return 'https://www.gravatar.com/avatar/' . md5($email) . '?s=' . $size;
}

function gravatar_tag($email)
{
    return '<img src="' . gravatar_url($email) . '">';
}