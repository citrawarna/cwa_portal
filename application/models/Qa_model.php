<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Qa_model extends CI_Model
{
	function getDefault(){
		return [
			'id_quality' => '',
			'id_qa' => '',
			'tanggal' => '',
			'nomor' => '',
			'id_departemen' => '',
			'jumlah_file' => '',
			'temuan' => '',
			'status' => ''
		];
	}

	function validationRules(){
		return [
			[
				'field' => 'id_qa',
				'label' => 'CAR/PAR',
				'rules' => 'trim|required'
			],
			[
				'field' => 'tanggal',
				'label' => 'Tanggal',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nomor',
				'label' => 'Nomor',
				'rules' => 'trim|required'
			],
			[
				'field' => 'id_departemen',
				'label' => 'Departemen',
				'rules' => 'trim|required'
			],
			[
				'field' => 'jumlah_file',
				'label' => 'Jumlah File',
				'rules' => 'trim|required'
			],
			[
				'field' => 'temuan',
				'label' => 'Temuan',
				'rules' => 'trim|required'
			],
			[
				'field' => 'status',
				'label' => 'Status',
				'rules' => 'trim|required'
			],
		];
	}

	function validate(){
		$rules = $this->validationRules();
		$this->form_validation->set_rules($rules);
		return $this->form_validation->run();
	}

	public function insert($input) {
		$this->db->insert('quality_assurance', $input);
		return $this->db->insert_id();
	}

	function update($input, $id){
		$this->db->where('id_quality', $id)->update('quality_assurance', $input);
	}
}

 ?>