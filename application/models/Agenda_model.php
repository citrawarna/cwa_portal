<?php defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_model extends CI_Model
{
	function getDefault(){
		return [
			'id_agenda' => '',
			'tanggal' => '',
			'jam' => '',
			'tempat' => '',
			'agenda' => '',
			'keterangan' => ''
		];
	}

	function rules(){
		return [
			[
				'field' => 'tanggal',
				'label' => 'Tanggal',
				'rules' => 'trim|required'
			],
			[
				'field' => 'jam',
				'label' => 'jam',
				'rules' => 'trim|required'
			],
			[
				'field' => 'tempat',
				'label' => 'Jumlah',
				'rules' => 'trim|required'
			],
			[
				'field' => 'agenda',
				'label' => 'agenda',
				'rules' => 'trim|required'
			],
		];
	}

	function validate(){
		$rules = $this->rules();
		$this->form_validation->set_rules($rules);
		return $this->form_validation->run();
	}

	function insert($input){
		$this->db->insert('agenda_rutin', $input);
		return $this->db->insert_id();
	}

	function update($input, $id_agenda){
		$this->db->where('id_agenda', $id_agenda)->update('agenda_rutin', $input);
	}
}

 ?>