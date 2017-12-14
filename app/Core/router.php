<?php


class Router
{
    protected $route;

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
    
    public static function get($uri,$routes)
    {
        $router = new static;
        $router->redirectMethod($uri, $routes);
    }
    
    public function redirectMethod($uri, $routes)
    {
      $uri = trim($_SERVER['REQUEST_URI'],'/');
      $data = explode('@', $routes);
      $controller = $data[0]; 
      $method = $data[1]; 
      require './app/Controllers/'.$controller.'.php';
      $obj = new $controller;
      $uri = explode('/', $uri); //explode entire URI to get the parameter if passed

      $parameters = [];

      
      foreach (array_slice($uri,1) as $value) {

          $parameters[] = $value;
      }


      call_user_func_array([$obj,$method], $parameters);  
    }
    
    public function redirect($uri,$routes)
    {
        // var_dump($routes);
        if(array_key_exists($uri, $routes)){

            $data =  $routes[$uri];
            $data = explode('@', $data); //explode the total route
            
            $method = $data[1]; //get method name
            
            $url = $data[0]; //get path of the controller

            $controller = explode('/', $url);
            $controller_class = explode('.',$controller[1]);
            //echo $controller_class[0];
            require './app/Controllers/'.$controller_class[0].'.php';

            // create new instance of matched controller
            $obj = new $controller_class[0];

            // check to see if the existing URI has some parameters

            $uri = explode('/', $uri); //explode entire URI to get the parameter if passed

            $parameters = [];

            
            foreach (array_slice($uri,1) as $value) {

                $parameters[] = $value;
            }


            call_user_func_array([$obj,$method], $parameters);
            
        }else{
            echo "Route Not found";
            
        }
    }
}