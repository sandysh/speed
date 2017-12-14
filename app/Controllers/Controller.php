<?php
namespace App\Controllers;
use App\Core\Load;
use App\Core\Request;
class Controller
{
    protected $load;
    
    protected $request;
        
    function __construct()
    {
        $this->load = $this->Load();
        $this->request = $this->request();
    }
    
    private function load()
    {
        return new Load();
    }
    
    private function request()
    {
        return new Request();
    }
    
}

// $controller = new Controller();