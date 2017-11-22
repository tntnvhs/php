<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Ex09_get extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url');
    
    
    }
    
        public function index()
        {
            $this->load->view('ex09_get/index');
        }
    
        public function result()
        {
            $answer = $this->input->get('answer');
            $msg = '';
            if($answer === 300){
                $msg = '정답';
            } else {
                $msg ='오답'
            }
            
            
            $this->load->view('ex09_get/result',['msg' =>$msg]);
            
            
        }

}