<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ex13_session extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Session');
    }
    
    public function index()
    {
        $data = 
            $this->load->view('ex13_session/index', $data);
        
    }
    public function result()
    {
        $username= $this->input->post('username');
        redirect('/ex13_session');
    }
}