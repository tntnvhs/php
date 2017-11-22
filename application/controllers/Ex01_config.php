<?php
class Ex01_config extends CI_Controller
{

    public function __construct()
    
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
    public function show_item()
    {
        //환경 설정 데이터에서 하나를 수정
        $this->config->set_item('base_url', 'http://itpaper.co.kr');
        //환경 설정 데이터에서 하나를 리턴
        
        $base_url = $this->config->item('base_url');
        
        $this->output->append_output($base_url);
        
    }
    public function custom_all()
    {
        $this->load->config('site');
    
        $config_data = $this->config->config;
        $str = print_r($config_data, TRUE);
        $this->output->append_output($str);
    }
    
    public function custom_item()
    {
        $this->load->config('site');
        
        $company = $this->config->item('company');
        $tel = $this->config->item('tel');
        $address = $this->config->item('address');
        $this->output->append_output($company.PHP_EOL);
        $this->output->append_output($tel.PHP_EOL);
        $this->output->append_output($address.PHP_EOL);
        
        $info = $this->config->item('info');
        $str = print_r($info, TRUE);
        $this->output->append_output($str);
        
    }
    
    
}

