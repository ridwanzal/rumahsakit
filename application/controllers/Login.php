<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Login extends CI_Controller {

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
        $this->load->view('backview/header', $data);
        $this->load->view('backview/login', $data);
        $this->load->view('backview/footer', $data);
  	}
	
	public function login(){
		$username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
		$encrypted_mypassword=md5($password);
		$query="SELECT 
				id_user,
				role
				FROM 
				users
				WHERE username = '$username' AND password = '$encrypted_mypassword' ";
		// var_dump($query);exit;
		$query_result = $this->db->query($query)->result_array();
        if(count($query_result) > 0){
          for($i=0; $i<count($query_result); $i++){
            $data_session = array(
			  'id_user' => $query_result[$i]['id_user'],
			  'status' => 'login',
			  'role' => $query_result[$i]['role']
            );
          }
            $this->session->set_flashdata('key', 1);
			$this->session->set_userdata($data_session);	
			$this->session->set_flashdata('message', 'Login Berhasil');
			// redirect(base_url());
			if($query_result[0]['role'] == 'pelanggan'){
				redirect(base_url('pelanggan'));
			}else if($query_result[0]['role'] == 'admin'){
				redirect(base_url('admin'));
			}else{
				redirect(base_url());
			}
        }else{
            $this->session->set_flashdata('message', 'Gagal Login');
			redirect(base_url("login"));
        }

	}

	public function logout(){
		$this->session->unset_userdata($newdata);
        $this->session->sess_destroy();
        redirect(base_url('login'));
	}
}