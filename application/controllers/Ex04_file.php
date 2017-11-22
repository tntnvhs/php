<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Ex04_file extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        //필요한 헬퍼파일
            $this->load->helper('file');   
            $this->load->helper('directory');
            $this->load->helper('util');
        
    }
    
    
    public function make_file()
    {
        $filename = time().".txt";
        $dir="./files";
        $filepath = $dir."/".$filename;
        
        if(!is_dir($dir)){
            mkdir($dir, true);
        }
        
        $result = write_file($filepath, "코드이그나이터");
        
        if($result){
            $this->output->append_output('<h1>파일 저장 ::: '.$filepath.'</h1>');
        } else{
            $this->output->append_output('<h1>파일 저장실패</h1>');
        }
        
        $contents = file_get_contents($filepath);
        debug($contents, "file_get_contents"); 
        
        
        $info = get_file_info($filepath);
        debug($info, "get_file_info");
        
        $type = get_mime_by_extension($filepath);
        debug($type, "get_mine_by_extension");
        
        
    }
    
    public function get_info()
    {
        $dir = "./files";
        
        $files = get_filenames($dir, FALSE);
        debug($files, "get_filenames");
        
        $files = get_filenames($dir, TRUE);
        debug($files, "get_filenames");
        
        $info = get_dir_file_info($dir , TRUE);
        debug($info, "get_dir_file_info");
        
    }
    
    public function delete()
    {
        $dir = "./files";
        
        $ok = delete_files($dir, TRUE);
        
        if($ok){
            debug("삭제완료");
        }else{
            debug("삭제실패");
        }
        
    }
    
    public function dir()
    {
        $map = directory_map('./', false, true);
        debug($map);
    }
    
    
    
}