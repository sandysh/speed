<?php
namespace App\Core;
/**
* 
*/
class Request
{
    protected $server_request;
    
    function __construct()
    {
        $this->server_request = $this->server_request;
        switch($_SERVER['REQUEST_METHOD'])
        {
        case 'GET': $this->server_request = $_GET; break;
        case 'POST': $this->server_request = $_POST; break;
        default:
        }
    }
    

    public static function get($variable)
    {
        return $this->server_request[$variable];
    }
    
    public function all()
    {
        return $this->server_request;
    }
    
    public function only($arg)
    {
        return $this->server_request[$arg];
    }
    
    public function except()
    {
        $args = func_get_args();
        foreach ($args as $key => $arg) {
            unset($this->server_request[$arg]);
        }
        return $this->server_request;
    }
}
