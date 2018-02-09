<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Kategori_nilai extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$login = $this->session->userdata('id_user');
		$level = $this->session->userdata('level');
		if(!$login) {
			$this->session->set_flashdata('error', 'Harap login terlebih dahulu!');
			redirect('backend');
		} else if($level != 'owner'){
			$this->session->set_flashdata('error', 'Anda tidak memiliki Wewenang');
			redirect('admin/pengumuman');
		}

		$this->load->model('kategori_model');
	}

	public function index(){
		$kategori_nilai = $this->db->get('kategori_nilai')->result_array();
		$description = 'Halaman Kategori Nilai';
		$title = 'Manage Kategori Nilai - CWA Portal';
		$content = 'backend/kategori/index';
		$this->load->view('backend/template', compact('kategori_nilai', 'description', 'title', 'content'));
	}

	function tambah(){
		if(!$_POST){
			$input = (array) $this->kategori_model->default();
		} else {
			$input = (array) $this->input->post();
		}

		if(!$this->kategori_model->validate()){
			$description = 'Halaman Kategori Nilai';
			$title = 'Tambah Kategori Nilai - CWA Portal';
			$content = 'backend/kategori/form';
			$form_action = 'admin/kategori_nilai/tambah';
			$this->load->view('backend/template', compact('description', 'title', 'input', 'content', 'form_action'));
			return;
		}

		$this->kategori_model->insert($input);
		$this->session->set_flashdata('success', 'Data user berhasil ditambah');
		redirect('admin/kategori_nilai');
	}
}

 ?>