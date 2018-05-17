<?php defined('BASEPATH') or exit('No direct script access allowed'); 

class Agenda extends CI_Controller
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

		$this->load->model('agenda_model');
	}

	public function index(){
		$agenda = $this->db->get('agenda_rutin')->result_array();
		$description = 'Halaman Agenda Rutin - CWA Portal';
		$title = 'Agenda rutin citra warna jaya abadi';
		$content = 'backend/agenda/index';
		$this->load->view('backend/template', compact('agenda', 'description', 'title', 'content'));
	}

	public function tambah(){
		if(!$_POST) {
			$input = $this->agenda_model->getDefault();
		} else {
			$input = $this->input->post();
		}

		if(!$this->agenda_model->validate()){
			$description = 'Halaman agenda - Tambah';
			$title = 'Tambah agenda - CWA Portal';
			$content = 'backend/agenda/form';
			$form_action = 'admin/agenda/tambah';
			$this->load->view('backend/template', compact('input','content', 'form_action', 'description', 'title'));
			return;
		}

		$this->agenda_model->insert($input);
		$this->session->set_flashdata('success', 'Data berhasil ditambahkan');
		redirect('admin/agenda');
	}

	public function edit($id_agenda){
		$agenda = $this->db->where('id_agenda', $id_agenda)->get('agenda_rutin')->row_array();
		if(!$_POST){
			$input = (array) $agenda;
		} else {
			$input = (array) $this->input->post();
		}

		if(!$this->agenda_model->validate()){
			$description = 'Halaman agenda - Edit';
			$title = 'Edit agenda - CWA Portal';
			$content = 'backend/agenda/form';
			$form_action = 'admin/agenda/edit/'. $id_agenda;
			$this->load->view('backend/template', compact('description', 'title', 'content', 'form_action', 'input'));
			return;
		}

		$this->agenda_model->update($input, $id_agenda);
		$this->session->set_flashdata('success', 'Data berhasil diedit');
		redirect('admin/agenda');
	}

	public function delete($id_agenda){
		$this->db->where('id_agenda', $id_agenda)->delete('agenda_rutin');
		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect('admin/agenda');
	}
}

?>