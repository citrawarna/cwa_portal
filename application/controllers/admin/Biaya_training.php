<?php defined('BASEPATH') or exit('No direct script access allowed!'); 

class Biaya_training extends CI_Controller
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

		$this->load->model('biaya_model');
	}

	public function index(){
		$biaya = $this->db->get('biaya_training')->result_array();
		$description = 'Halaman Biaya Training';
		$title = 'Biaya Training - CWA Portal';
		$content = 'backend/biaya/index';
		$this->load->view('backend/template', compact('biaya', 'description', 'title', 'content'));
	}

	public function tambah(){
		if(!$_POST) {
			$input = $this->biaya_model->getDefault();
		} else {
			$input = $this->input->post();
		}

		if(!$this->biaya_model->validate()){
			$description = 'Halaman Biaya - Tambah';
			$title = 'Tambah Biaya - CWA Portal';
			$content = 'backend/biaya/form';
			$form_action = 'admin/biaya_training/tambah';
			$this->load->view('backend/template', compact('input','content', 'form_action', 'description', 'title'));
			return;
		}

		$this->biaya_model->insert($input);
		$this->session->set_flashdata('success', 'Data berhasil ditambahkan');
		redirect('admin/biaya_training');
	}

	public function edit($id){
		$biaya_training = $this->db->where('id_biaya', $id)->get('biaya_training')->row_array();
		if(!$_POST){
			$input = (array) $biaya_training;
		} else {
			$input = (array) $this->input->post();
		}

		if(!$this->biaya_model->validate()){
			$description = 'Halaman Biaya - Edit';
			$title = 'Edit Biaya - CWA Portal';
			$content = 'backend/biaya/form';
			$form_action = 'admin/biaya_training/edit/'. $id;
			$this->load->view('backend/template', compact('description', 'title', 'content', 'form_action', 'input'));
			return;
		}

		$this->biaya_model->update($input, $id);
		$this->session->set_flashdata('success', 'Data berhasil diedit');
		redirect('admin/biaya_training');
	}

	public function delete($id){
		//$data = $this->db->where('id_qa', $id)->get('quality_assurance')->row_array();
		$this->db->where('id_biaya', $id)->delete('biaya_training');

		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect('admin/biaya_training');
	}

}

?>