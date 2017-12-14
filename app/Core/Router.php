<?php

class Router
{
    protected $route;
    
    protected $all_url = [];

    function __construct()
    {
        
    }

    public static function load($routes)
    {
        require $routes;
        
        $router = new static;

        $uri = trim($_SERVER['REQUEST_URI'],'/');
        
        $router->redirect($uri,$routes);
    }
    
    public function notFoundException($msg)
    {
        throw new Exception($msg);
    }
    
    // public function redirectMethod($uri, $routes)
    // {
    //       $data = explode('@', $routes);
    //       $controller = $data[0]; 
    //       $method = $data[1]; 
    //       require './app/Controllers/'.$controller.'.php';
    //       $obj = new $controller;
    //       $uri = explode('/', $uri); //explode entire URI to get the parameter if passed
    //       $parameters = [];

    //       foreach (array_slice($uri,1) as $value) {

    //           $parameters[] = $value;
    //       }


    //       call_user_func_array([$obj,$method], $parameters); 
      
    // }
    
    public function redirect($uri,$routes)
    {
        if(array_key_exists($uri, $routes)){

            $data =  $routes[$uri];
            
            $data = explode('@', $data); //explode the total route
            $method = $data[1]; //get method name
            
            $url = $data[0]; //get path of the controller
            $controller = explode('.',$url);
            $resources = explode('/', $controller[0]);
            // die(var_dump(($resources)));
            
            if(sizeof($resources) > 2){
                $resource_type = $resources[0];
                $controller_folder = $resources[1];
                $controller_class = $resources[2];
                require './app/Controllers/'.$controller_folder.'/'.$controller_class.'.php';
            } else {
                $resource_type = $resources[0];
                $controller_class = $resources[1];
                 require './app/Controllers/'.$controller_class.'.php';
            }

            // create new instance of matched controller
            $obj = new $controller_class;

            // check to see if the existing URI has some parameters

            $uri = explode('/', $uri); //explode entire URI to get the parameter if passed

            $parameters = [];

            
            foreach (array_slice($uri,1) as $value) {

                $parameters[] = $value;
            }
            $form_method = $_SERVER['REQUEST_METHOD'];
            
            if(strtoupper($resource_type) != $form_method)
            {
                $this->notFoundException('Route Mismatch');
            } else {
                call_user_func_array([$obj,$method], $parameters);
            }
        }else{
            echo "Route Not found";
            
        }
    }
}