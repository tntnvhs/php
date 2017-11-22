<?php defined('BASEPATH') OR exit('NO direct script access allowed');


class Ex05_use_library extends CI_Controller
    
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('Helloword');
    }
    public function index()
    {
        $this->helloword->say_kor();
        $this->helloword->say_eng();
    }
    
}
