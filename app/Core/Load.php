<?php
namespace App\Core;
use Jenssegers\Blade\Blade;
/**
* 
*/
class Load
{   

    public static function view($view, $data=null)
    {
        $blade = new Blade('views', 'cache');
        if($data){
            echo $blade->make($view, $data);
        } else {
            echo $blade->make($view);
        }
        // $passed_view = explode('.', $view);
        // if(sizeof($passed_view) > 1){
        //     $firstlevel = $passed_view[0];
        //     $lastlevel = $passed_view[1];
        //     $blade = new Blade('views/'.$firstlevel, 'cache');
        //     echo $blade->make($lastlevel, $data);
        //     // require './views/'.$firstlevel.'/'.$lastlevel.'.view.php';
        // } else {
        //     $firstlevel = $passed_view[0];
        //     $blade = new Blade('views', 'cache');
        //     echo $blade->make($firstlevel, $data);
        //     // require './views/'.$firstlevel.'.view.php';
        // }
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
