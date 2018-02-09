<?php defined('BASEPATH') or exit();

class Pengumuman_model extends CI_Model
{
	public function getDefaultValues(){
		return [
			'id_pengumuman' => '',
			'id_user' => '',
			'judul' => '',
			'tanggal' => date('Y-m-d'),
			'isi' => '',
			'file' => '',
			'gambar' => ''
		];
	}

	public function getValidationRules() {
		return [
			[
				'field' => 'judul',
				'label' => 'Judul',
				'rules' => 'required'
			],
			[
				'field' => 'id_user',
				'label' => 'User',
				'rules' => 'required'
			],
			[
				'field' => 'tanggal',
				'label' => 'Tanggal',
				'rules' => 'required'
			],
			[
				'field' => 'isi',
				'label' => 'Isi',
				'rules' => 'required'
			],
		];
	}

	public function validate() {
		$rules = $this->getvalidationRules();
		$this->form_validation->set_rules($rules);
		return $this->form_validation->run();
	}

	public function insert($input) {
		$this->db->insert('pengumuman', $input);
		return $this->db->insert_id();
	}

	public function update($input, $id) {
		$this->db->where('id_pengumuman', $id)->update('pengumuman', $input);
	}
}

 ?>