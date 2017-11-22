<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

if (!function_exists('defug'))
{
    function debug($value) {
    
        $content = print_r($value, true);//프린터 r은 배열 객체 구조를 보여줌-->데이터의 구조 출력 
        
        //현재 컨트롤러 객체의 참조
        $CI = &get_instance();
        $CI->output->append_output($content); //구조를 출력한다
        //CI는 $this 대신임
        //
    
    }


}

