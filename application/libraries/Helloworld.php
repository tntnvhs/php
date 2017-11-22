<?php defined('BASEPATH') OR exit('NO direct script access allowed');

class Helloworld
{
    var $CI;
    
    public function __construct()
    {
        $this->CI->& get_instance();
    }
    public function say_kor()
    {
        $this->CI->output->append_output("<h1>하이</h1>");
    }
    public function say_eng()
    {
        $this->CI->output->append_output("<h1>hello</h1>");
    }
}