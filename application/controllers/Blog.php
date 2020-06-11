  <?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Blog extends CI_Controller {

      function __construct(){
        parent::__construct();		
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta'); // default time zone indonesia
        $login_status = $this->session->userdata('status');
      }

      public function edit($id){
        $data['title_bar'] = "";
        $data['header_page'] = "";
        $query="SELECT blog_id, title, subtitle, author_id, date_created, max_length, image_path, category, tag, bookmark, likes, content FROM blog WHERE blog_id = $id order by date_created";
        $query_result = $this->db->query($query)->result();

        $data['blog'] = $query_result;
        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/blog_edit.php', $data);
        $this->load->view('backview/footer.php', $data);
      }
      
      public function submit_blog(){
          $login_status = $this->session->userdata('status');
          if($login_status == 'login'){
              // $thumbnail = $this->input->post('blog_thumb', TRUE);
              $title = $this->input->post('blog_title', TRUE);
              $content = $this->input->post('blog_content', TRUE);
              $author_id = $this->session->userdata('id_user');
              $submit = $this->input->post('submit_blog');
              $submit_draft = $this->input->post('submit_draft_blog');
              $category = $this->input->post('blog_category');
              //Buat slug
              $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $title); //filter karakter unik dan replace dengan kosong ('')
              $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
              $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
              $slug=$pre_slug; // tambahkan ektensi .html pada slug
              $foto = $_FILES['upload_thumb'];
              $image_path = "";
              if($submit && !$foto == ''){
                $config['upload_path'] = './assets/blog/thumb_img/';
                $config['allowed_types'] = 'jpg|png|gif';
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('upload_thumb')){
                  echo 'Gagal upload';
                }else{
                  $image_path = $this->upload->data('file_name');
                }
                
                $data = array(
                  'title' => $title,
                  'slug' => $slug,
                  'author_id' => $author_id,
                  'image_path' => $image_path,
                  'content' => $content,
                  'category' => $category,
                  'type' => 1
                );
        
                $this->db->insert('blog', $data);
                $affect_row = $this->db->affected_rows();
                if($affect_row > 0){
                  $this->session->set_flashdata('message', 'Berhasil menambahkan konten');
                }else{
                  $this->session->set_flashdata('error', 'Gagal menambahkan konten');
                }
                redirect(base_url("admin"));
        
              }else if($submit_draft){
                $data = array(
                  'title' => $title,
                  'slug' => $slug,
                  'author_id' => $author_id,
                  'image_path' => $image_path,
                  'content' => $content,
                  'category' => $category,
                  'type' => 2
                );
        
                $this->db->insert('blog', $data);
                $affect_row = $this->db->affected_rows();
                if($affect_row > 0){
                  $this->session->set_flashdata('message', 'Berhasil menambahkan konten');
                }else{
                  $this->session->set_flashdata('error', 'Gagal menambahkan konten');
                }
                redirect(base_url("admin"));
              }
          }
      }


      public function edit_blog(){
        $login_status = $this->session->userdata('status');
        if($login_status == 'login'){
            // $thumbnail = $this->input->post('blog_thumb', TRUE);
            $id = $this->input->post('blog_id', TRUE);
            $title = $this->input->post('blog_title', TRUE);
            $content = $this->input->post('blog_content', TRUE);
            $submit = $this->input->post('submit_blog');
            $blog_category = $this->input->post('blog_category');
            //Buat slug
            $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $title); //filter karakter unik dan replace dengan kosong ('')
            $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
            $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
            $slug=$pre_slug; // tambahkan ektensi .html pada slug
            // $foto = $_FILES['upload_thumb'];
            // $image_path = "";
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
                'title' => $title,
                'slug' => $slug,
                'content' => $content,
                'category' => $blog_category
              );
      
              $this->db->where('blog_id', $id);
              $this->db->update('blog', $data);
              $affect_row = $this->db->affected_rows();
          
              // $this->db->insert('layanan', $data);
              // $affect_row = $this->db->affected_rows();
              // var_dump($affect_row);exit;
              if($affect_row > 0){
                $this->session->set_flashdata('message', 'Berhasil menambahkan konten');
              }else{
                $this->session->set_flashdata('error', 'Gagal menambahkan konten');
              }
              redirect(base_url("admin"));
            }
        }
    }

      public function blog_content_detail($slug){
        $query = "SELECT * FROM blog where slug='$slug'";
        $query_result = $this->db->query($query);
        $query_resulat_array = $this->db->query($query)->result();
        if($query_result->num_rows() > 0 ){
          $x['datapost']= $query_result;
          $x['title_bar'] = $query_resulat_array[0]->title;
          $x['header_page'] = "";
          $x['keyword'] = $query_resulat_array[0]->title;
          $x['description'] = $query_resulat_array[0]->title;
          $this->load->view('frontview/header', $x);
          $this->load->view('frontview/navbar', $x);
          $this->load->view('frontview/page/blog/blogdetail', $x);
          $this->load->view('frontview/footer', $x);
        }else{
          redirect(base_url());
        }
      } 

      public function blog_content_list(){
          $query="SELECT * FROM blog order by blog_id";
          $query_result = $this->db->query($query);
          $result = json_encode($query_result->result());
          echo $result;
      }

      public function blog_content_list_search(){
        $keyword = $this->input->get('keyword');
        $keyword_search = str_replace("'", "", $keyword);
        $query="SELECT * FROM blog where title like '%$keyword_search%' ";
        $query_result = $this->db->query($query)->result();
        // echo '<pre>'; 
        //   var_dump($query_result);die;
        // echo '</pre>';
        // echo $result;
        $data['search_result'] = $query_result;
        $this->load->view('frontview/header', $data);
        $this->load->view('frontview/navbar', $data);
        $this->load->view('frontview/page/search/search', $data);
        $this->load->view('frontview/footer', $data);
      }

      public function blog_content_list_ex(){
        if($this->session->userdata('status') != "login"){
          redirect(base_url("login"));
        }else{
          $query="SELECT blog_id, title, subtitle, author_id, date_created, max_length, image_path, category, tag, bookmark, likes FROM blog order by date_created";
          $query_result = $this->db->query($query);
          $result = json_encode($query_result->result());
          echo $result;
        }
      }


      public function deletepost($id){
        $login_status = $this->session->userdata('status');
        if($login_status == 'login'){
          $this->db->where('blog_id', $id);
          $this->db->delete('blog');
          redirect(base_url('admin'));
        }
      }
  

}