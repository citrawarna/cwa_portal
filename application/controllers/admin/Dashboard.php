<?php defined('BASEPATH') or exit();

class Dashboard extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$login = $this->session->userdata('id_user');
		if(!$login) {
			$this->session->set_flashdata('error', 'Harap login terlebih dahulu!');
			redirect('backend');
		}
	}
	
	public function index(){
		$title = 'Dashboard - CWA Portal';
		$description = 'Selamat datang dihalaman admin, halaman yang digunakan untuk mengelola isi dari website portal citra warna';
		$content = 'backend/dashboard';
		$this->load->view('backend/template', compact('description', 'title', 'content'));
	}
}

 ?>