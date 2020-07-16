<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Layananpenunjang extends CI_Controller {

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
        
        $query2="SELECT * FROM layanan_penunjang order by id DESC";
        $query_result2 = $this->db->query($query2)->result();
        $data['daftar_layanan_penunjang'] = $query_result2;

        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/layananpenunjang.php', $data);
        $this->load->view('backview/footer.php', $data);
      }

      public function edit($id){
        $data['title_bar'] = "";
        $data['header_page'] = "";
        
        $query2="SELECT * FROM layanan_penunjang WHERE id = $id order by id DESC";
        $query_result2 = $this->db->query($query2)->result();
        $data['daftar_layanan_penunjang'] = $query_result2;

        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/layananpenunjang_edit.php', $data);
        $this->load->view('backview/footer.php', $data);
      }
      
      
      public function submit_layananpenunjang(){
          $login_status = $this->session->userdata('status');
          if($login_status == 'login'){
              // $thumbnail = $this->input->post('blog_thumb', TRUE);
              $title = $this->input->post('nama', TRUE);
              $content = $this->input->post('deskripsi', TRUE);
              $author_id = $this->session->userdata('id_user');
              $submit = $this->input->post('submit_layanan');
              $category = $this->input->post('blog_category');
              //Buat slug
              $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $title); //filter karakter unik dan replace dengan kosong ('')
              $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
              $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
              $slug=$pre_slug; // tambahkan ektensi .html pada slug
              $foto = $_FILES['upload_thumb'];
              $image_path = "";
              if($submit && !$foto == ''){
                $config['upload_path'] = './assets/layananpenunjang/thumb/';
                $config['allowed_types'] = 'jpeg|jpg|png|gif|svg|tif';
                $config['max_size']             = 100000;
                $config['encrypt_name'] 		= FALSE;
                $config['overwrite'] 		= FALSE;
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('upload_thumb')){
                  echo 'Gagal upload';
                }else{
                  $image_path = $this->upload->data('file_name');
                }
                    
                $data = array(
                  'nama' => $title,
                  'thumb' => $image_path,
                  'slug' => $slug,
                  'deskripsi' => $content
                );
        
                $this->db->insert('layanan_penunjang', $data);
                $affect_row = $this->db->affected_rows();
                // var_dump($affect_row);exit;
                if($affect_row > 0){
                  $this->session->set_flashdata('message', 'Berhasil menambahkan konten');
                }else{
                  $this->session->set_flashdata('error', 'Gagal menambahkan konten');
                }
                redirect(base_url("admin/penunjang"));
              }
          }
      }

      public function edit_layananpenunjang(){
        $login_status = $this->session->userdata('status');
        if($login_status == 'login'){
            // $thumbnail = $this->input->post('blog_thumb', TRUE);
            $id = $this->input->post('id', TRUE);
            $title = $this->input->post('nama', TRUE);
            $content = $this->input->post('deskripsi', TRUE);
            $submit = $this->input->post('submit_layanan');
            //Buat slug
            $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $title); //filter karakter unik dan replace dengan kosong ('')
            $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
            $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
            $slug=$pre_slug; // tambahkan ektensi .html pada slug
            $foto = $_FILES['upload_thumb'];
            $image_path = "";
            if($submit){
              // $config['upload_path'] = './assets/layanan/thumb/';
              // $config['allowed_types'] = 'jpg|png|gif|svg|pdf|tif';
              // $this->load->library('upload', $config);
              // if(!$this->upload->do_upload('upload_thumb')){
              //   echo 'Gagal upload';
              // }else{
              //   $image_path = $this->upload->data('file_name');
              // }
                  
              $data = array(
                'nama' => $title,
                'slug' => $slug,
                'deskripsi' => $content
              );
      
              $this->db->where('id', $id);
              $this->db->update('layanan_penunjang', $data);
              $affect_row = $this->db->affected_rows();
          
              // $this->db->insert('layanan', $data);
              // $affect_row = $this->db->affected_rows();
              // var_dump($affect_row);exit;
              if($affect_row > 0){
                $this->session->set_flashdata('message', 'Berhasil menambahkan konten');
              }else{
                $this->session->set_flashdata('error', 'Gagal menambahkan konten');
              }
              redirect(base_url("admin/penunjang"));
            }
        }
    }

      public function daftar_layananpenunjang(){
          $query="SELECT * FROM layanan_penunjang order by id DESC";
          $query_result = $this->db->query($query);
          $result = json_encode($query_result->result()); 
          echo $result;
      }


      public function layanan_detail($slug){
        $query = "SELECT * FROM layanan_penunjang where slug='$slug'";
        $query_result = $this->db->query($query);
        $query_resulat_array = $this->db->query($query)->result();
        if($query_result->num_rows() > 0 ){
          $x['layanandetail']= $query_result;
          $x['title_bar'] = $query_resulat_array[0]->nama;
          $x['header_page'] = "";
          $x['keyword'] = $query_resulat_array[0]->nama;
          $x['description'] = $query_resulat_array[0]->nama;
          $this->load->view('frontview/header', $x);
          $this->load->view('frontview/navbar', $x);
          $this->load->view('frontview/page/layanan/penunjangdetail', $x);
          $this->load->view('frontview/footer', $x);
        }else{
          redirect(base_url());
        }
      } 

      public function delete($id){
        $login_status = $this->session->userdata('status');
        if($login_status == 'login'){
          $this->db->where('id', $id);
          $this->db->delete('layanan_penunjang');
          redirect(base_url('admin/penunjang'));
        }
      }
  

}