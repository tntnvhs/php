<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Ex02_use_helper extends CI_Controller
{
    public function __construct()
    {
    
        parent::__construct();
        
        $this->load->helper('util');
    }
   
    
    //컨트롤러 생성자 미리 작성

    public function index()
        
        $message = "HELLO CODE";
        debug($message);

}