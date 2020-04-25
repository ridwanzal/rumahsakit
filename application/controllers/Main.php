<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Main extends CI_Controller {

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
		// $check_level = $this->session->userdata('role');
		// if($check_level == 'admin'){
			
		// }else if($check_level == 'pelanggan'){
		// 	$data['title_bar'] = "";
		// 	$data['header_page'] = "";
		// 	$this->load->view('backview//header', $data);
		// 	$this->load->view('backview/pelanggan/navbar', $data);
		// 	$this->load->view('backview/footer', $data);
		// }else {
			$data['title_bar'] = "";
			$data['header_page'] = "";
			$this->load->view('frontview/header', $data);
			$this->load->view('frontview/navbar', $data);
			$this->load->view('frontview/page/index/section1', $data);
			$this->load->view('frontview/page/index/section2', $data);
			$this->load->view('frontview/page/index/section3', $data);
			$this->load->view('frontview/footer', $data);
		// }
  }

  public function profile(){
		
  }

  public function detail_produk($id_produk){
	
  }

  public function contact(){
		$data['title_bar'] = "";
		$data['header_page'] = "";
		$this->load->view('frontview/header', $data);
		$this->load->view('frontview/navbar', $data);
		$this->load->view('frontview/page/contact/contact', $data);
		$this->load->view('frontview/footer', $data);
  }

  public function karir(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/karir/karir', $data);
	$this->load->view('frontview/footer', $data);
 }

  public function sejarah(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/sejarah/sejarah', $data);
	$this->load->view('frontview/footer', $data);
  }

  public function visimisi(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/visimisi/visimisi', $data);
	$this->load->view('frontview/footer', $data);
  }

  public function fasilitas(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/fasilitas/fasilitas', $data);
	$this->load->view('frontview/footer', $data);
  }

  public function rooms(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/rooms/rooms', $data);
	$this->load->view('frontview/footer', $data);
  }

  public function about(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/about/about', $data);
	$this->load->view('frontview/footer', $data);
  }

  public function feeds(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/feed/feed', $data);
	$this->load->view('frontview/footer', $data);
  }
   
}