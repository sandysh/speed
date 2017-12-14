<?php

if (!function_exists('dd')) { 
function dd($data)
{
        echo "<pre>";
        var_dump($data);
        die();
        echo "</pre>";
}
}

if (!function_exists('return_response')) { 
function return_response($data)
{
    echo "<pre>";
    echo json_encode($data);
    echo "</pre>";
}
}

function load_css($css)
{
    echo "<link rel='stylesheet' href='/assets/css/$css.css'>";
    // echo APP_URL.'/assets/css/';
}

function load_js($js)
{
    echo "<script type='javascript' src='/assets/js/$js.css'></script>";
    // echo APP_URL.'/assets/css/';
}


