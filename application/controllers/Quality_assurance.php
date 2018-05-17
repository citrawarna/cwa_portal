<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Quality_assurance extends CI_Controller
{
	public function car(){
		$data = $this->db->where('quality_assurance.id_qa', '1')
						->join('qa_kategori', 'qa_kategori.id_qa=quality_assurance.id_qa')
						->join('departemen', 'departemen.id_departemen=quality_assurance.id_departemen')
						->order_by('tanggal', 'desc')
						->get('quality_assurance')
						->result_array();
		$ket = 'Data CAR';
		$title = 'Data Car - CWA Portal';
		$description = 'Check data car disini';
		$content = 'quality_assurance';
		$this->load->view('template', compact('data', 'ket', 'title', 'description', 'content'));
	}

	public function par(){
		$data = $this->db->where('quality_assurance.id_qa', '2')
						->join('qa_kategori', 'qa_kategori.id_qa=quality_assurance.id_qa')
						->join('departemen', 'departemen.id_departemen=quality_assurance.id_departemen')
						->order_by('tanggal', 'desc')
						->get('quality_assurance')
						->result_array();
		$ket = 'Data PAR';
		$title = 'Data Car - CWA Portal';
		$description = 'Check data car disini';
		$content = 'quality_assurance';
		$this->load->view('template', compact('data', 'ket', 'title', 'description', 'content'));
	}
}

 ?>