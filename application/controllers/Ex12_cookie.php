<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ex12_cookie extends CI_Controller
{
    public function __construct()
    {
        parnet::__construct;
        $this->load->helper('url');
    }
    
    public function index()
    {
        $this->load->view('ex12_post/index');
        $cookie_name = $this->config->item('cookie_prefix').'hello_cookie';
        $mycookie = $this->input->cookie($cookie_name);
        
        $data = new stdClass();
        $data->mycookie = $mycookie;
        $this->load->view('ex12_cookie/index', $data);
    }
    
    public function result(){
        $username=$this->input->post('username');
        if ($username){
            $this->input->set_cookie("hello_cookie", $username, 60);
        }else{
            $this->input->set_cookie('hello_cookie', false, -1);
        }
    
        redirect('/ex12_cookie');
    }
    
}