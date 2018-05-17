<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Kategori_model extends CI_Model
{
	public function getDefault(){
		return [
		        'id_kat' => '',
				'nama_test' => '',
		
		];
	}

	public function validationRules(){
		return [
			[
				'field' => 'nama_test',
				'label' => 'Nama Test',
				'rules' => 'required'
			],
		];
	}

	public function validate(){
		$rules = $this->validationRules();
		$this->form_validation->set_rules($rules);
		return $this->form_validation->run();
	}

	public function insert($input){
		$this->db->insert('kategori_nilai', $input);
		return $this->db->insert_id();
	}
}


 ?>