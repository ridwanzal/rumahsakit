<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Layanan extends CI_Controller {

      function __construct(){
        parent::__construct();		
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta'); // default time zone indonesia
        $login_status = $this->session->userdata('status');
      }

      public function index(){
        $data['title_bar'] = "";
        $data['header_page'] = "";
        
        $query2="SELECT * FROM layanan order by id DESC";
        $query_result2 = $this->db->query($query2)->result();
        $data['daftar_layanan'] = $query_result2;

        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/layanan.php', $data);
        $this->load->view('backview/footer.php', $data);
      }
      
      public function submit_layanan(){
          // $thumbnail = $this->input->post('blog_thumb', TRUE);
          $title = $this->input->post('nama', TRUE);
          $content = $this->input->post('deskripsi', TRUE);
          $author_id = $this->session->userdata('id_user');
          $submit = $this->input->post('submit_layanan');
          $category = $this->input->post('blog_category');
          $foto = $_FILES['upload_thumb'];
          $image_path = "";
          if($submit && !$foto == ''){
            $config['upload_path'] = './assets/layanan/thumb/';
            $config['allowed_types'] = 'jpg|png|gif';
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('upload_thumb')){
              echo 'Gagal upload';
            }else{
              $image_path = $this->upload->data('file_name');
            }
                
            $data = array(
              'nama' => $title,
              'thumb' => $image_path,
              'deskripsi' => $content
            );
    
            $this->db->insert('layanan', $data);
            $affect_row = $this->db->affected_rows();
            if($affect_row > 0){
              $this->session->set_flashdata('message', 'Berhasil menambahkan konten');
            }else{
              $this->session->set_flashdata('error', 'Gagal menambahkan konten');
            }
            redirect(base_url("admin/layanan"));
    
          }
      }


      public function daftar_layanan(){
          $query="SELECT * FROM layanan order by id DESC";
          $query_result = $this->db->query($query);
          $result = json_encode($query_result->result());
          echo $result;
      }

      public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('layanan');
        redirect(base_url('admin/layanan'));
      }
  

}