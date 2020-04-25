<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Pelanggan extends CI_Controller {

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

      public function index(){
            $data['title_bar'] = "";
            $data['header_page'] = "";
            $this->load->view('backview//header', $data);
            $this->load->view('backview/pelanggan/navbar', $data);
            $this->load->view('backview/pelanggan/dashboard/index', $data);
            $this->load->view('backview/footer', $data);
      }


      public function order(){
            $data['title_bar'] = "";
            $data['header_page'] = "";
            $this->load->view('backview//header', $data);
            $this->load->view('backview/pelanggan/navbar', $data);
            $this->load->view('backview/pelanggan/dashboard/order', $data);
            $this->load->view('backview/footer', $data);
      }

      
      public function testimoni(){
            $data['title_bar'] = "";
            $data['header_page'] = "";
            $this->load->view('backview//header', $data);
            $this->load->view('backview/pelanggan/navbar', $data);
            $this->load->view('backview/pelanggan/dashboard/index', $data);
            $this->load->view('backview/footer', $data);
      }

}