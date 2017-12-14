<?php
use App\Controllers\Controller;
/**
* 
*/
class TestController extends Controller
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
        'body' => "This is test page",
        ];
        // return_response($data);
        $this->load->view('test',$data);
    }
    
    public function postData()
    {
        dd($this->request->except('email','password'));
    }
}


