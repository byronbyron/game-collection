<?php

function link_me_to($url, $body, $parameters = null){
    $url = url($url);

    $attributes = $parameters ? HTML::attributes($parameters) : '';

    return "<a href='{$url}'{$attributes}>{$body}</a>";
}

function errors_for($attribute, $errors)
{
    return $errors->first($attribute, '<span class="text-danger">:message</span>');
}