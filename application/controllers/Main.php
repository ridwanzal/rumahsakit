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
			$data['title_bar'] = "";
			$data['header_page'] = "";
			$query = "SELECT * FROM banner";
			$query_result = $this->db->query($query)->result();
			$data['banner'] = $query_result;
			$this->load->view('frontview/header', $data);
			$this->load->view('frontview/navbar', $data);
			$this->load->view('frontview/page/index/section1', $data);
			$this->load->view('frontview/page/index/section2', $data);
			$this->load->view('frontview/page/index/section3', $data);
			$this->load->view('frontview/page/index/section4', $data);
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
		$query2="SELECT * FROM contact_banner order by id DESC";
		$query_result2 = $this->db->query($query2)->result();

		$data['contact_banner'] = $query_result2;
		$this->load->view('frontview/header', $data);
		$this->load->view('frontview/navbar', $data);
		$this->load->view('frontview/page/contact/contact', $data);
		$this->load->view('frontview/footer', $data);
  }

  public function karir(){
	$data['title_bar'] = "";
	$data['header_page'] = "";

	$query2="SELECT * FROM banner_karir order by id DESC";
	$query_result2 = $this->db->query($query2)->result();

	$query3="SELECT * FROM karir_open order by id DESC";
	$query_result3 = $this->db->query($query3)->result();

	$data['banner_karir'] = $query_result2;
	$data['karir_open'] = $query_result3;
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/karir/karir', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function karirdetail($id){
	$data['title_bar'] = "";
	$data['header_page'] = "";

	$query2="SELECT * FROM banner_karir order by id DESC";
	$query_result2 = $this->db->query($query2)->result();

	$query3="SELECT * FROM karir_open where id = '$id' ";
	$query_result3 = $this->db->query($query3)->result();

	$data['banner_karir'] = $query_result2;
	$data['karir_open'] = $query_result3;
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/karir/karirdetail', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function submit_lamaran(){
	$id_karir_open = $this->input->post('id_karir_open', TRUE);
	$nama = $this->input->post('nama', TRUE);
	$email = $this->input->post('email', TRUE);
	$cv = $this->input->post('cv', TRUE);

	$image_file = "";
	$config['upload_path'] = './assets/karir/cv/';
	$config['allowed_types'] = 'pdf|doc|docx|txt|png|jpeg|jpg|';
	$this->load->library('upload', $config);
	if(!$this->upload->do_upload('berkas')){
	  echo 'Gagal upload';
	}else{
	  $image_file = $this->upload->data('file_name');
	}

	$data = array(
	  'id_karir_open' => $id_karir_open,
	  'nama' => $nama,
	  'email' => $email,
	  'cv' => $image_file,
	  'date_created' => date("Y-m-d h:i:s"),
	);
	$this->db->insert('karir_open_pelamar', $data);
	$affect_row = $this->db->affected_rows();
	if($affect_row > 0){
	  $this->session->set_flashdata('message', 'Selamat, lamaran kamu berhasil dikirim');
	  redirect(base_url('karir'));
	}else{
	  $this->session->set_flashdata('error', 'Gagal mengirim lamaran');
	}
  }


 public function pengunjung(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/pengunjung/pengunjung', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function artikel(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/blog/bloglist', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function berita(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/blog/bloglist', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function kegiatan(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/blog/bloglist', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function artikeldetail(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/blog/blogdetail', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function layanan(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/layanan/layanan', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function penunjang(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/layanan/penunjang', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function pendukung(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/layanan/pendukung', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function galeri(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$query2="SELECT * FROM galeri order by id DESC";
	$query_result2 = $this->db->query($query2)->result();
	$data['galeri'] = $query_result2;

	$query3="SELECT * FROM galeri_video order by id DESC";
	$query_result3 = $this->db->query($query3)->result();
	$data['galeri_video'] = $query_result3;
	
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/galeri/galeri', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function jadwaldokter(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$query2="SELECT * FROM jadwaldokter order by id DESC";
	$query_result2 = $this->db->query($query2)->result();
	$data['jadwaldokter'] = $query_result2;

	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/jadwaldokter/jadwaldokter', $data);
	$this->load->view('frontview/footer', $data);
 }

 public function daftarpasien(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$query2="SELECT * FROM daftarpasien order by id DESC";
	$query_result2 = $this->db->query($query2)->result();
	$data['daftarpasien'] = $query_result2;
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/daftarpasien/daftarpasien', $data);
	$this->load->view('frontview/footer', $data);
 }
 
 public function hakkewajiban(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$query2="SELECT * FROM hakkewajiban order by id DESC LIMIT 1";
	$query_result2 = $this->db->query($query2)->result();
	$data['daftar'] = $query_result2;
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/hakkewajiban/hakkewajiban', $data);
	$this->load->view('frontview/footer', $data);
 }

 
  public function sejarah(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$query2="SELECT * FROM sejarah order by id DESC LIMIT 1";
	$query_result2 = $this->db->query($query2)->result();
	$data['daftar'] = $query_result2;
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/sejarah/sejarah', $data);
	$this->load->view('frontview/footer', $data);
  }

  public function visimisi(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$query2="SELECT * FROM visimisi order by id DESC LIMIT 1";
	$query_result2 = $this->db->query($query2)->result();
	$data['daftar'] = $query_result2;
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/visimisi/visimisi', $data);
	$this->load->view('frontview/footer', $data);
  }

  public function direksi(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$query2="SELECT * FROM direksi order by id DESC LIMIT 1";
	$query_result2 = $this->db->query($query2)->result();
	$data['daftar'] = $query_result2;
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/direksi/direksi', $data);
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

  public function rekanan(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$query2="SELECT * FROM rekanan order by id DESC";
	$query_result2 = $this->db->query($query2)->result();
	$data['rekanan'] = $query_result2;

	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/rekanan/rekanan', $data);
	$this->load->view('frontview/footer', $data);
  }

  public function prestasi(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$query2="SELECT * FROM prestasi order by id DESC ";
	$query_result2 = $this->db->query($query2)->result();
	$data['daftar'] = $query_result2;
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/prestasi/prestasi', $data);
	$this->load->view('frontview/footer', $data);
  }

  public function dokter(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$query2="SELECT * FROM dokter order by id DESC ";
	$query_result2 = $this->db->query($query2)->result();
	$data['daftar'] = $query_result2;
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/dokter/dokter', $data);
	$this->load->view('frontview/footer', $data);
  }

  public function pmkp(){
	$data['title_bar'] = "";
	$data['header_page'] = "";
	$query2="SELECT * FROM pmkp order by id DESC LIMIT 1";
	$query_result2 = $this->db->query($query2)->result();
	$data['daftar'] = $query_result2;
	$this->load->view('frontview/header', $data);
	$this->load->view('frontview/navbar', $data);
	$this->load->view('frontview/page/pmkp/pmkp', $data);
	$this->load->view('frontview/footer', $data);
  }

  public function submit_kontak(){
	$nama = $this->input->post('nama', TRUE);
	$email = $this->input->post('email', TRUE);
	$telepon = $this->input->post('telepon', TRUE);
	$subject = $this->input->post('subject', TRUE);
	$pesan = $this->input->post('pesan', TRUE);
		
	$data = array(
		'nama' => $nama,
		'email' => $email,
		'telepon' => $telepon,
		'subject' => $subject,
		'pesan' => $pesan
	);

	$this->db->insert('contact', $data);
	$check = $this->db->affected_rows() > 0;
	if($check){
		$this->session->set_flashdata('message', 'Data berhasil dikirim');
		$this->session->set_flashdata('allowlogin', 'Login untuk melanjutkan');
		redirect(base_url('kontak'));
	}
  }

  public function submit_pasien(){
	$nama = $this->input->post('nama', TRUE);
	$telepon = $this->input->post('telepon', TRUE);
	$nik = $this->input->post('nik', TRUE);
	$bpjs = $this->input->post('bpjs', TRUE);
		
	$data = array(
		'nik' => $nik,
		'nama' => $nama,
		'no_telepon' => $telepon,
		'bpjs' => $bpjs
	);

	$data2= array(
		'pesan' =>  $nama . ' terdaftar sebagai calon pasien',
		'date_created' => date("Y-m-d h:i:sa"),
		'status' => 'unread',
		'type' => 'kontak',
		'link' => '/admin/pasien'
	);

	$this->db->insert('notifikasi', $data2);
	$check2 = $this->db->affected_rows() > 0;

	$this->db->insert('daftarpasien', $data);
	$check = $this->db->affected_rows() > 0;
	if($check){
		$this->session->set_flashdata('message', 'Data berhasil dikirim');
		$this->session->set_flashdata('allowlogin', 'Login untuk melanjutkan');
		redirect(base_url('daftarpasien'));
	}
  }

  public function search(){
	  $keyword = $this->input->get('keyword');
  }


   
}