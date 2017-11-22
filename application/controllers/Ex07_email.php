<?php defined('BASEPATH') OR exit('NO direct script access allowed');

class Ex07_email extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('email');
        $this->config->load('email');
        
        $this->load->helper('util'); //debug 쓰게 함
    }
    
    public function index()
    {
        $mail_config = $this->config->item('email');
        
        $sender_addr =$mail_config['smtp_user'];
        $sender_name ='관리자';
        $receiver_addr = 'tntnvhs@gmail.com';
        $receiver_name = '사이트회원';
        $subject = '메일 제목';
        $content ='<h1>하이</h1>';
            
            
        if($receiver_name){
            $receiver_addr = sprintf("%s<%s>" , $receiver_name, $receiver_addr);
        }
        
        $this->email->initialize($mail_config);
        $this->email->set_newline("");      
        $this->email->clear();
        
        $this->email->from($sender_addr, $sender_name);
        $this->email->to($receiver_addr);
        $this->email->reply_to($sender_addr, $sender_name);
        $this->email->subject($subject);
        $this->email->message($content);
        
        $result = $this->email->send();
        
        debug($result ? "발송성공":"발송실패", "발송결과");
        
        debug($this->email->print_debugger());
      
            
            
    }
}