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

