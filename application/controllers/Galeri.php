<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Galeri extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta'); // default time zone indonesia
		$login_status = $this->session->userdata('status');
        if(!$login_status == 'login'){
              redirect(base_url('login'));
        }
	}
	
	public function index()
	{
		$data['title_bar'] = "";
		$data['header_page'] = "";
		
		$query2="SELECT * FROM galeri order by id DESC";
		$query_result2 = $this->db->query($query2)->result();
		$data['galeri'] = $query_result2;

		$query3="SELECT * FROM galeri_video order by id DESC";
		$query_result3 = $this->db->query($query3)->result();
		$data['galeri_video'] = $query_result3;

		$this->load->view('backview/header.php', $data);
		$this->load->view('backview/admin/navbar.php', $data);
		$this->load->view('backview/admin/dashboard/galeri.php', $data);
		$this->load->view('backview/footer.php', $data);
	}
	

	public function youtube(){
		$caption = $this->input->post('caption', TRUE);
		$link = $this->input->post('link', TRUE);
		$data = array(
			'link' => $link,
			'caption' => $caption,
		);

		$this->db->insert('galeri_video', $data);
		$affect_row = $this->db->affected_rows();
		if($affect_row > 0){
			$this->session->set_flashdata('message', 'Berhasil menambahkan konten');
			redirect(base_url('admin/galeri'));
		}else{
			$this->session->set_flashdata('error', 'Gagal menambahkan konten');
		}
	}

	public function delete_youtube($id){
		$this->db->where('id', $id);
		$this->db->delete('galeri_video');
		redirect(base_url('admin/galeri'));
	}
	
}