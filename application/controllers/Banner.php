<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Banner extends CI_Controller {

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
		$query = "SELECT * FROM banner";
		$query_result = $this->db->query($query)->result();
		$data['banner'] = $query_result;
        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/banner.php', $data);
        $this->load->view('backview/footer.php', $data);
	}
	
	
	public function delete_banner($id){
		$this->db->where('id', $id);
		$this->db->delete('banner');
		redirect(base_url('admin/banner'));
	}

	
}