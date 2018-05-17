<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Biaya_model extends CI_Model
{
	function getDefault(){
		return [
			'id_biaya' => '',
			'tanggal' => '',
			'nama_barang' => '',
			'harga' => '',
			'jumlah' => ''
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
				'field' => 'nama_barang',
				'label' => 'Nama Barang',
				'rules' => 'trim|required'
			],
			[
				'field' => 'jumlah',
				'label' => 'Jumlah',
				'rules' => 'trim|required'
			],
			[
				'field' => 'harga',
				'label' => 'Harga Satuan',
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
		$this->db->insert('biaya_training', $input);
		return $this->db->insert_id();
	}

	function update($input, $id){
		$this->db->where('id_biaya', $id)->update('biaya_training', $input);
	}
}

 ?>