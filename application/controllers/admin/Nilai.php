<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Nilai extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$login = $this->session->userdata('id_user');
		$level = $this->session->userdata('level');
		if(!$login) {
			$this->session->set_flashdata('error', 'Harap login terlebih dahulu!');
			redirect('backend');
		} else if($level != 'owner'){
			$this->session->set_flashdata('error', 'Anda tidak memiliki Wewenang');
			redirect('admin/pengumuman');
		}

		$this->load->model('nilai_model');
	}

	public function index(){
		$nilai = $this->db->join('departemen', 'departemen.id_departemen=nilai.id_departemen')->join('kategori_nilai', 'kategori_nilai.id_kat = nilai.id_kat')
		->order_by('tanggal', 'desc')->get('nilai')->result_array();
		$description = 'Halaman Nilai';
		$title = 'Laporan Nilai - CWA Portal';
		$content = 'backend/nilai/index';
		$this->load->view('backend/template', compact('nilai', 'description', 'title', 'content'));
	}

	public function tambah(){

		$validasi = array(
				array('field' => 'id_nilai[]', 'rules' => 'trim'),
				array('field' => 'id_kat[]', 'rules' => 'required'),
				array('field' => 'tanggal[]', 'rules' => 'trim|required'),
				array('field' => 'nama_peserta[]', 'rules' => 'required'),
				array('field' => 'id_departemen[]', 'rules' => 'required'),
				array('field' => 'jabatan[]', 'rules' => 'required'),
			);

		$input = $this->form_validation->set_rules($validasi);
		if($input->run() == true){
			$insert = $this->input;
			$id_nilai = $insert->post('');
			$id_kat = $insert->post('id_kat[]');
			$tanggal = $insert->post('tanggal[]');
			$nama_peserta = $insert->post('nama_peserta[]');
			$id_departemen = $insert->post('id_departemen[]');
			$jabatan = $insert->post('jabatan[]');
			$nilai = $insert->post('nilai[]');

			$value = array();

			for($i=0; $i<count($tanggal); $i++){
				$value[$i] = array (
					'id_kat' => $id_kat[$i],
					'tanggal' => $tanggal[$i],
					'nama_peserta' => $nama_peserta[$i],
					'id_departemen' => $id_departemen[$i],
					'jabatan' => $jabatan[$i],
					'nilai' => $nilai[$i]
					);
			}

			//print_r($value);

			$this->db->insert_batch('nilai', $value);
			$this->session->set_flashdata('success', 'Data nilai berhasil ditambah');
			redirect('admin/nilai');

		}

		$form_action = 'admin/nilai/tambah';
		$description = 'Tambah Nilai';
		$title = 'Tambah Nilai - CWA Portal';
		$content = 'backend/nilai/form';
		$this->load->view('backend/template', compact('form_action', 'description', 'title', 'content'));
	}

	public function edit($id_nilai){
		$nilai = $this->db->where('id_nilai', $id_nilai)->get('nilai')->row_array();

		if(!$_POST){
			$form_action = "admin/nilai/edit/$id_nilai";
			$input = $nilai;
			$content = 'backend/nilai/form_edit';
			$description = 'Edit Nilai';
			$title = 'Edit Nilai - CWA Portal';
			$this->load->view('backend/template', compact('form_action','input', 'content', 'title', 'description'));
		} else {
			$input = $this->input->post();
			$this->nilai_model->update($id_nilai, $input);
			$this->session->set_flashdata('success', 'Data berhasil diedit');
			redirect('admin/nilai');
		}

	}

	public function delete($id_nilai){
		$this->db->where('id_nilai', $id_nilai)->delete('nilai');
		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect('admin/nilai');
	}


}


 ?>