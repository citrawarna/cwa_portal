<?php defined('BASEPATH') or exit('No direct script access allowed!');

class User extends CI_Controller
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

		$this->load->model('user_model');
	}

	public function index(){
		$user = $this->db->get('user')->result_array();
		$description = 'Halaman User';
		$title = 'Manage User - CWA Portal';
		$content = 'backend/user/index';
		$this->load->view('backend/template', compact('user', 'description', 'title', 'content'));
	}

	public function tambah(){
		if(!$_POST){
			$input = (array) $this->user_model->default();
		} else {
			$password = $this->input->post('password');
			$input = array(
			    'username' => $this->input->post('username'),
			    'password' => sha1($password),
			    'level' => $this->input->post('level')
			    );
		}

		if(!$this->user_model->validate()){
			$description = 'Halaman User';
			$title = 'Tambah User - CWA Portal';
			$content = 'backend/user/form';
			$form_action = 'admin/user/tambah';
			$this->load->view('backend/template', compact('description', 'title', 'input', 'content', 'form_action'));
			return;
		}

		$this->user_model->insert($input);
		$this->session->set_flashdata('success', 'Data user berhasil ditambah');
		redirect('admin/user');
	
	}
}

 ?>