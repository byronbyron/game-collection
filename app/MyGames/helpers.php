<?php

function link_me_to($url, $body, $parameters = null){
    $url = url($url);

    $attributes = $parameters ? HTML::attributes($parameters) : '';

    return "<a href='{$url}'{$attributes}>{$body}</a>";
}

function link_to_profile($text = 'Profile')
{
    return link_to_route('profile', $text, Auth::user()->username);
}

function errors_for($attribute, $errors)
{
    return $errors->first($attribute, '<span class="errors">:message</span>');
}