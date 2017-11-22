<?php
class Ex01_config extends CI_Controller
{

    publick function __construct()
    
        {
         parent::__construct();
        }




public function show_all()
{

    $config_data = $this->config->config;
    
    $str = print_r($config_data, TRUE);
    
    $this->output->append_output("<pre>");
    $this->output->append_output($str);
    $this->output->append_output("</pre>");


}
    
}