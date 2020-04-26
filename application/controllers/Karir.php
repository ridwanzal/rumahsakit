<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Karir extends CI_Controller {

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
        $query="SELECT * FROM karir_open order by date_created";
        $query_result = $this->db->query($query)->result();
        $data['karir_open'] = $query_result;
        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/karir.php', $data);
        $this->load->view('backview/footer.php', $data);
      }

      public function submit_post(){
        $posisi = $this->input->post('position', TRUE);
        $description = $this->input->post('description', TRUE);
        $status = $this->input->post('status', TRUE);
        $data = array(
            'posisi' => $posisi,
            'deskripsi' => $description,
            'date_created' => date("Y-m-d h:i:s"),
            'status' => $status
          );

          $this->db->insert('karir_open', $data);
          $affect_row = $this->db->affected_rows();
          if($affect_row > 0){
            $this->session->set_flashdata('message', 'Berhasil menambahkan konten');
            redirect(base_url('admin/karir'));
          }else{
            $this->session->set_flashdata('error', 'Gagal menambahkan konten');
          }
      }

}