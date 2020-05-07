<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Uploads extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->library('form_validation');
    	date_default_timezone_set('Asia/Jakarta'); // default time zone indonesia
	}

	public function uploads($pathname, $tables){
        // echo $pathname;
        // echo $tables;
		$config['upload_path']          = './assets/' .$pathname. '/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 8000;
		$config['max_height']           = 100000;
		$config['encrypt_name'] 		= false;
		$this->load->library('upload',$config);
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for($i = 0; $i < $jumlah_berkas; $i++){
			echo $i;
            if(!empty($_FILES['berkas']['name'][$i])){
				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
	   
				if($this->upload->do_upload('file')){
					echo 'tes';
					$uploadData = $this->upload->data();
					$data['image_name'] = $uploadData['file_name'];
					$this->db->insert($tables,$data);
				}
			}
		} // end of loop
		
		redirect(base_url('admin'));
		
	}  

	public function uploads_caption($pathname, $tables){
		
	}
	
}