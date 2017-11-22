<?php defined('BASEPATH') OR exit('NO direct script access allowed');


class Ex06_encryption extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    
        $this->load->library('encryption');
        $this->load->helper('util'); //debug 쓰게 함
    
    }
    
    
    public function index()
    {
        $source = "hello";
        
        
        $enc = $this->encryption->encrypt($source);
        debug($enc, "암호화결과");
        
        $dec = $this->encryption->decrypt($enc);
        debug($dec, "복호화");
        
        
    }
    
    
    
}