<?php defined('BASEPATH') or exit();

class Pengumuman extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$login = $this->session->userdata('id_user');
		if(!$login) {
			$this->session->set_flashdata('error', 'Harap login terlebih dahulu!');
			redirect('backend');
		}

		$this->load->model('pengumuman_model');
	}
	
	public function index(){
		$description = 'Halaman pengumuman, silahkan melakukan insert, update maupun delete pengumuman';
		$title = 'Pengumuman - CWA Portal';
		$pengumuman = $this->db->join('user', 'user.id_user=pengumuman.id_user')->get('pengumuman')->result_array();
		$content = 'backend/pengumuman/index';
		$this->load->view('backend/template', compact('content', 'description', 'title', 'pengumuman'));
	}

	public function tambah(){
		$description = 'Halaman pengumuman, silahkan melakukan insert, update maupun delete pengumuman';
		$title = 'Pengumuman - CWA Portal';

		if(!$_POST) {
			$input = (array) $this->pengumuman_model->getDefaultValues();
		} else {
			$input = (array) $this->input->post();
		}

		if(!$this->pengumuman_model->validate()){
			$content = 'backend/pengumuman/form';
			$form_action = 'admin/pengumuman/tambah';
			$this->load->view('backend/template', compact('description', 'title', 'input', 'content', 'form_action'));
			return;
		}

		$this->pengumuman_model->insert($input);
		$this->session->set_flashdata('success', 'Data pengumuman berhasil ditambah');
		redirect('admin/pengumuman');
	}
}

 ?>