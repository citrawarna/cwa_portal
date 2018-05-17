<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Qa extends CI_Controller
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

		$this->load->model('qa_model');
	}

	public function index(){
		$qa = $this->db->join('qa_kategori', 'qa_kategori.id_qa=quality_assurance.id_qa')->join('departemen', 'departemen.id_departemen=quality_assurance.id_departemen')->get('quality_assurance')->result_array();
		$description = 'Halaman Quality Assurance';
		$title = 'Laporan CAR/PAR';
		$content = 'backend/qa/index';
		$this->load->view('backend/template', compact('qa', 'description', 'title', 'content'));
	}

	public function tambah(){
		if(!$_POST){
			$input = (array) $this->qa_model->getDefault();
		} else {
			$input = (array) $this->input->post();
		}

		if(!$this->qa_model->validate()){
			$description = 'Halaman Quality Assurance - Tambah';
			$title = 'Tambah CAR/PAR - CWA Portal';
			$content = 'backend/qa/form';
			$form_action = 'admin/qa/tambah';
			$this->load->view('backend/template', compact('input','content', 'form_action', 'description', 'title'));
			return;
		}

		$this->qa_model->insert($input);
		$this->session->set_flashdata('success', 'Data berhasil ditambahkan');
		redirect('admin/qa');
	}

	public function edit($id){
		$quality_assurance = $this->db->where('id_quality', $id)->get('quality_assurance')->row_array();
		if(!$_POST){
			$input = (array) $quality_assurance;
		} else {
			$input = (array) $this->input->post();
		}

		if(!$this->qa_model->validate()){
			$description = 'Halaman Quality Assurance - Edit';
			$title = 'Edit Pengumuman - CWA Portal';
			$content = 'backend/qa/form';
			$form_action = 'admin/qa/edit/'.$id;
			$this->load->view('backend/template', compact('description', 'title', 'content', 'form_action', 'input'));
			return;
		}

		$this->qa_model->update($input, $id);
		$this->session->set_flashdata('success', 'Data berhasil diedit');
		redirect('admin/qa');
	}

	public function delete($id){
		//$data = $this->db->where('id_qa', $id)->get('quality_assurance')->row_array();
		$this->db->where('id_quality', $id)->delete('quality_assurance');

		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect('admin/qa');
	}
}

 ?>