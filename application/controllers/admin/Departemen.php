<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Departemen extends CI_Controller
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

		$this->load->model('departemen_model');
	}

	public function index(){
		$departemen = $this->db->get('departemen')->result_array();
		$description = 'Halaman Departemen';
		$title = 'Manage Departemen - CWA Portal';
		$content = 'backend/departemen/index';
		$this->load->view('backend/template', compact('departemen', 'description', 'title', 'content'));
	}

	function tambah(){
		if(!$_POST){
			$input = (array) $this->departemen_model->getDefault();
		} else {
			$input = (array) $this->input->post();
		}

		if(!$this->departemen_model->validate()){
			$description = 'Halaman Departemen';
			$title = 'Manage Departemen - CWA Portal';
			$content = 'backend/departemen/form';
			$form_action = 'admin/departemen/tambah';
			$this->load->view('backend/template', compact('description', 'title', 'input', 'content', 'form_action'));
			return;
		}

		$this->departemen_model->insert($input);
		$this->session->set_flashdata('success', 'Data user berhasil ditambah');
		redirect('admin/departemen');
	}
}

 ?>