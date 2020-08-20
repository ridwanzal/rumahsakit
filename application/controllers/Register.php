<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Register extends CI_Controller {

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
        $this->load->view('backview/register', $data);
        $this->load->view('backview/footer', $data);
  	}
    
      
    public function register(){
        $nama = $this->input->post('nama', TRUE);
		$username = $this->input->post('username', TRUE);
		$email = $this->input->post('email', TRUE);
		$alamat = $this->input->post('alamat', TRUE);
		$password = $this->input->post('password', TRUE);

		$encrypted_password = md5($password);
		
		$data = array(
			'username' => ''.$username,
			'nama_lengkap' => ''.$nama,
			'role' => 'pelanggan',
			'email' => ''.$email,
			'alamat' => ''.$alamat,
			'password' => $encrypted_password
		);

		$this->db->insert('users', $data);
		$check = $this->db->affected_rows() > 0;
		if($check){
			$this->session->set_flashdata('message', 'Proses pendaftaran berhasil');
			$this->session->set_flashdata('allowlogin', 'Login untuk melanjutkan');
			redirect(base_url('register'));
        }

    }
}