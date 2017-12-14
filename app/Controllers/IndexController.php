<?php
use App\Controllers\Controller;
/**
* 
*/
class IndexController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('data');
    }

    public function index()
    {
        $data = [
        'title'=> "index page",
        'body' => "This index page is coming directly from controller",
        ];
        // return_response($data);
        $this->load->view('index',$data);
    }
    
    public function postData()
    {
        dd($this->request->except('email','password'));
    }
}


