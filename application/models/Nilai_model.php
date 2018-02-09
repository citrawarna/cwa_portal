<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Nilai_model extends CI_Model
{
	public function update($id_nilai, $input){
		return $this->db->where('id_nilai', $id_nilai)->update('nilai', $input);
	}
}


 ?>