<?php defined('BASEPATH') or exit('No direct script access allowed!');

class User_model extends CI_Model
{
	function default(){
		return [
			'id_user' => '',
			'username' => '',
			'password' => '',
			'level' => ''
		];
	}

	function rules(){
		return [
			[
				'field' => 'username',
				'label' => 'User',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			],
			[
				'field' => 'level',
				'label' => 'Level',
				'rules' => 'required'
			],
		];
	}

	function validate(){
		$rules = $this->rules();
		$this->form_validation->set_rules($rules);
		return $this->form_validation->run();
	}

	public function insert($input) {
		$this->db->insert('user', $input);
		return $this->db->insert_id();
	}
}

 ?>