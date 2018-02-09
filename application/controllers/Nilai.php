<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Nilai extends CI_Controller
{
	public function index(){
		$data = '';
		$form_action = 'nilai/view';
		$title = 'Nilai - CWA Portal';
		$description = 'Check nilai hasil test anda disini';
		$content = 'nilai';
		$this->load->view('template', compact('data','form_action', 'title', 'description', 'content'));
	}

	public function view(){
		$form_action = 'nilai/view';
		$tanggal = $this->input->get('tanggal', true);
		$kategori = $this->input->get('id_kat', true);

		$data = $this->db->where('tanggal', $tanggal)
						->where('nilai.id_kat', $kategori)
						->join('kategori_nilai', 'kategori_nilai.id_kat = nilai.id_kat')
						->join('departemen', 'departemen.id_departemen = nilai.id_departemen')
						->order_by('nama_test', 'desc')
						->get('nilai')
						->result_array();

		$title = 'Nilai - CWA Portal';
		$description = 'Check nilai hasil test anda disini';
		$content = 'nilai';
		$this->load->view('template', compact('form_action','title', 'description', 'content', 'data'));
	}
}

 ?>