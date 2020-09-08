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

	public function multiple($pathname, $tables, $context){
        // echo $pathname;
        // echo $tables;
		$config['upload_path']          = './assets/' .$pathname. '/';
		$config['allowed_types']        = 'jpeg|tif|svg|gif|jpg|png|tif|JPG|JPEG|PNG';
		$config['max_size']             = 100000;
		$config['max_width']            = 8000;
		$config['max_height']           = 100000;
		$config['encrypt_name'] 		= FALSE;
		$config['overwrite'] 		= FALSE;
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
		
		switch($context){
			case 'galeri' :
				redirect(base_url('admin/galeri'));
			break;
			case 'karir' : 
				redirect(base_url('admin/karir'));
			break;
			case 'banner' : 
				redirect(base_url('admin/banner'));
			break;
			case  'contact' :
				redirect(base_url('admin/kontak'));
			break;
 		}
		
	} 

	public function single($pathname, $tables, $context){
		$caption = $this->input->post('caption', TRUE);
		$config['upload_path']          = './assets/' .$pathname. '/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|mp4|webm|ogv|JPG|JPEG|PNG';
		$config['max_size']             = 1000000;
		$config['max_width']            = 8000;
		$config['max_height']           = 1000000;
		$image_file = "";
		$this->load->library('upload',$config);
		$foto = $_FILES['berkas'];
		IF($foto != ''){
			if(!$this->upload->do_upload('berkas')){
				echo 'Gagal upload';
			}else{
				$image_file = $this->upload->data('file_name');
			}
	
			$data = array(
				'image_name' => $image_file,
				'caption' => $caption
			);
	
			$this->db->insert($tables, $data);
			switch($context){
				case 'galeri' :
					redirect(base_url('admin/galeri'));
				break;
				case 'karir' : 
					redirect(base_url('admin/karir'));
				break;
				case 'banner' : 
					redirect(base_url('admin/banner'));
				break;
				case  'contact' :
					redirect(base_url('admin/kontak'));
				break;
				case  'jadwaldokter' :
					redirect(base_url('admin/jadwaldokter'));
				break;
				case  'rekanan' :
					redirect(base_url('admin/rekanan'));
				break;
			 }
		}else{
			echo 'empty broh';
		}
	}


	public function singlewithlink($pathname, $tables, $context){
		$caption = $this->input->post('caption', TRUE);
		$link = $this->input->post('link', TRUE);
		$config['upload_path']          = './assets/' .$pathname. '/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|mp4|webm|ogv|JPG|JPEG|PNG';
		$config['max_size']             = 1000000;
		$config['max_width']            = 8000;
		$config['max_height']           = 1000000;
		$image_file = "";
		$this->load->library('upload',$config);
		$foto = $_FILES['berkas'];
		IF($foto != ''){
			if(!$this->upload->do_upload('berkas')){
				echo 'Gagal upload';
			}else{
				$image_file = $this->upload->data('file_name');
			}
	
			$data = array(
				'image_name' => $image_file,
				'caption' => $caption,
				'link' => $link
			);
	
			$this->db->insert($tables, $data);
			switch($context){
				case 'galeri' :
					redirect(base_url('admin/galeri'));
				break;
				case 'karir' : 
					redirect(base_url('admin/karir'));
				break;
				case 'banner' : 
					redirect(base_url('admin/banner'));
				break;
				case  'contact' :
					redirect(base_url('admin/kontak'));
				break;
				case  'jadwaldokter' :
					redirect(base_url('admin/jadwaldokter'));
				break;
				case  'rekanan' :
					redirect(base_url('admin/rekanan'));
				break;
			 }
		}else{
			echo 'empty broh';
		}
	}

	public function delete($id, $context){	
		switch($context){
			case 'galeri' :
				$this->db->where('id', $id);
				$this->db->delete('galeri');
				redirect(base_url('admin/galeri'));
			break;
			case 'karir' : 
				$this->db->where('id', $id);
				$this->db->delete('banner_karir');
				redirect(base_url('admin/karir'));
			break;
			case 'banner' : 
				$this->db->where('id', $id);
				$this->db->delete('banner');
				redirect(base_url('admin/banner'));
			break;
			case  'contact' :
				$this->db->where('id', $id);
				$this->db->delete('contact_banner');
				redirect(base_url('admin/kontak'));
			break;
			case  'jadwaldokter' :
				$this->db->where('id', $id);
				$this->db->delete('jadwaldokter');
				redirect(base_url('admin/jadwaldokter'));
			break;
			case  'rekanan' :
				$this->db->where('id', $id);
				$this->db->delete('rekanan');
				redirect(base_url('admin/rekanan'));
			break;
 		}
	}

	public function update($id, $pathname, $tables, $context){
		$caption = $this->input->post('caption', TRUE);
		$link = $this->input->post('link', TRUE);
		if($pathname == 'layanan'){
			$pathname = 'layanan/thumb';
		}else if($pathname == 'penunjang'){
			$pathname = 'layananpenunjang/thumb';
		}else if($pathname == 'pendukung'){
			$pathname = 'layananpendukung/thumb';
		}
		$config['upload_path']          = './assets/' .$pathname. '/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PNG';
		$config['max_size']             = 1000000;
		$config['max_width']            = 8000;
		$config['max_height']           = 1000000;
		$image_file = "";
		$this->load->library('upload',$config);
		$foto = $_FILES['berkas'];
		IF($foto != ''){
			if(!$this->upload->do_upload('berkas')){
				echo 'Gagal upload';
			}else{
				$image_file = $this->upload->data('file_name');
			}
	
			$data = array(
				'thumb' => $image_file,
			);

			$this->db->where('id', $id);
			$this->db->update($tables, $data);
			switch($context){
				case  'layanan' :
					redirect(base_url('admin/layanan'));
				break;
				case  'penunjang' :
					redirect(base_url('admin/penunjang'));
				break;
				case  'pendukung' :
					redirect(base_url('admin/pendukung'));
				break;
				default : 
					redirect(base_url('admin'));
				break;
			 }
		}else{
			echo 'empty broh';
		}
	}
	
}