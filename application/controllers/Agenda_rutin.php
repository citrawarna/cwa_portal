<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Agenda_rutin extends CI_Controller
{
	public function index(){
		$data = $this->db->get('agenda_rutin')->result_array();
		$title = 'Agenda Rutin - CWA Portal';
		$description = 'Agenda Rutin PT. Citra Warna Jaya Abadi';
		$content = 'agenda_rutin';
		$this->load->view('template', compact('data', 'title', 'description', 'content'));
	}
}

 ?>