<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Departemen_model extends CI_Model
{
	public function getDefault(){
		return [
		
				'nama_departemen' => ''
		
		];
	}

	public function validationRules(){
		return [
			[
				'field' => 'nama_departemen',
				'label' => 'Nama Departemen',
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
		$this->db->insert('departemen', $input);
		return $this->db->insert_id();
	}
}


 ?>