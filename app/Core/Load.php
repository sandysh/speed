<?php
namespace App\Core;
/**
* 
*/
class Load
{   

    public static function view($view, $data=null)
    {
        require './views/'.$view.'.view.php';
    }

    public function helper($helper)
    {
        require './helpers/'.$helper.'.helper.php';
    }

    public function library($library)
    {
        require './libraries/'.$library.'.library.php';
    }
    
    public static function check()
    {
        var_dump("expression and here");
    }

}


// $load = new Load();
