<?php
namespace App\Core;
/**
* 
*/
class Load
{   

    public static function view($view, $data=null)
    {
        $passed_view = explode('.', $view);
        if(sizeof($passed_view) > 1){
            $firstlevel = $passed_view[0];
            $lastlevel = $passed_view[1];
            require './views/'.$firstlevel.'/'.$lastlevel.'.view.php';
        } else {
            $firstlevel = $passed_view[0];
            require './views/'.$firstlevel.'.view.php';
        }
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
