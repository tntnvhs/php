<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ex11_post extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
    
    
    public function index()
        $this->load->view('ex11_post/index')
    
    public function result()
    {
        $username=$this->input->post('username');
        $email = $this->input->post('email', FALSE);
        
        $data = [
            'username' => $username,
            'email' =>$email
            
        ];
        
        $this->load->view('ex11_post/result.php', $data);
        
    }
    
}