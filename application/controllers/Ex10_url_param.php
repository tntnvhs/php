<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ex10_url_param extends CI_Controller
    
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url');
    }
    
    
    public function index()
    {
        $this->load->view('ex10_url_param/index');
    }
    
    public function result($msg1='헬로', $msg2='월드')
    {
        $data new stdClass();
        $data->msg1 = $msg1;
        $data->msg2 = $msg2;
        
        $this->load->view('ex10_url_param/result', $data);
    }
    
    
}