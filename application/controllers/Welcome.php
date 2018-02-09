<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$pengumuman = $this->db->order_by('tanggal', 'desc')->join('user', 'user.id_user = pengumuman.id_user')->get('pengumuman')->result_array();
		$title = 'Home - CWA Portal';
		$description = 'Selamat datang di website portal citra warna';
		$content = 'home';
		$this->load->view('template', compact('description', 'title', 'content', 'pengumuman'));
	}

	function read($id) {
		$pengumuman = $this->db->where('id_pengumuman', $id)->join('user', 'user.id_user=pengumuman.id_user')->get('pengumuman')->row_array();
		$title = $pengumuman['judul']. 'CWA - Portal';
		$description = $pengumuman['isi'];
		$content = 'read';
		$this->load->view('template', compact('pengumuman', 'title', 'description', 'content'));
	}
}
