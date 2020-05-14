<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Error extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->library('form_validation');
    	date_default_timezone_set('Asia/Jakarta'); // default time zone indonesia
	}
	
	public function index()
	{
		$data['title_bar'] = "";
		$data['header_page'] = "";
		
		$query2="SELECT * FROM rekanan order by id DESC";
		$query_result2 = $this->db->query($query2)->result();
		$data['rekanan'] = $query_result2;

		$this->load->view('backview/header.php', $data);
		$this->load->view('backview/admin/navbar.php', $data);
		$this->load->view('backview/admin/dashboard/rekanan.php', $data);
		$this->load->view('backview/footer.php', $data);
	}
	
}