<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Kontak extends CI_Controller {

      function __construct(){
        parent::__construct();		
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta'); // default time zone indonesia
      }
      
      public function index(){
        $data['title_bar'] = "";
        $data['header_page'] = "";
        $query="SELECT * FROM contact order by id";
        $query_result = $this->db->query($query)->result();
        $data['kontak'] = $query_result;
        
        $query2="SELECT * FROM contact_banner order by id DESC";
        $query_result2 = $this->db->query($query2)->result();
        $data['contact_banner'] = $query_result2;

        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/kontak.php', $data);
        $this->load->view('backview/footer.php', $data);
      }

      public function submit_kontak(){
        $nama = $this->input->post('nama', TRUE);
        $email = $this->input->post('email', TRUE);
        $telepon = $this->input->post('telepon', TRUE);
        $subject = $this->input->post('subject', TRUE);
        $pesan = $this->input->post('pesan', TRUE);
        $kritiksaran = $this->input->post('kritiksaran', TRUE);
            
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'telepon' => $telepon,
            'subject' => $subject,
            'pesan' => $pesan,
            'kritiksaran' => $kritiksaran
        );
    
        $this->db->insert('contact', $data);
        $check = $this->db->affected_rows() > 0;

        $data2= array(
          'pesan' => 'Kontak terbaru dari ' . $nama . '',
          'date_created' => date("Y-m-d h:i:sa"),
          'status' => 'unread',
          'type' => 'kontak',
          'link' => '/admin/kontak'
        );

        $this->db->insert('notifikasi', $data2);
        $check2 = $this->db->affected_rows() > 0;

        if($check){
            $this->session->set_flashdata('message', 'Data berhasil dikirim');
            $this->session->set_flashdata('allowlogin', 'Login untuk melanjutkan');
            redirect(base_url('kontak'));
        }
      }

      public function delete($id){
        $login_status = $this->session->userdata('status');
        if($login_status == 'login'){
          $this->db->where('id', $id);
          $this->db->delete('contact');
          redirect(base_url('admin/kontak'));
        }
      }

}