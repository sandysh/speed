<?php
use App\Controllers\Controller;
use App\Models\User;
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
        // dd(User::all());
        $data = [
        'title'=> "index page",
        'body' => "Welcome to Speed framework",
        ];
        $this->load->view('index',$data);
    }
    
    public function postData()
    {
        dd($this->request->except('email','password'));
    }
}


