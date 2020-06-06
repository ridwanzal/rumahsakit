<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Jadwaldokter extends CI_Controller {

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
		
		$query2="SELECT * FROM jadwaldokter order by id DESC";
		$query_result2 = $this->db->query($query2)->result();
		$data['galeri'] = $query_result2;

		$query3="SELECT * FROM jadwaldokter order by id DESC";
		$query_result3 = $this->db->query($query3)->result();
		$data['jadwaldokter'] = $query_result3;

		$this->load->view('backview/header.php', $data);
		$this->load->view('backview/admin/navbar.php', $data);
		$this->load->view('backview/admin/dashboard/jadwaldokter.php', $data);
		$this->load->view('backview/footer.php', $data);
	}
	
}