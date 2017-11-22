<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Ex03_path extends CI_Controller
{
    
    
    public function __construct()
        
    {
        parent::__construct();
        
        
        $this->load->helper('path');
        $this->load->helper('util');
        
        
    }
    
    
    public function set_realpath()
    {
        
        $path1="./text";
        $path2="./.htaccess";
        
        $check1 = set_realpath($path1);
        $check2 = set_realpath($path2);
        
        if($check1 === $path1) {
            
            debug($path1. '가 존재하지않아요.' .PHP_EOL);
        } else{
            
            debug($path1. '가 존재함.>>' .$check1.PHP_EOL);
            
            
        }
         if($check2 === $path2) {
            
            debug($path2. '가 존재하지않아요.' .PHP_EOL);
        } else{
            
            debug($path2. '가 존재함.>>' .$check2.PHP_EOL);
            
            
        }
            
            
            
        }
    }
    
    





