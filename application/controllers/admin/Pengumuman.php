<?php defined('BASEPATH') or exit();

class Pengumuman extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$login = $this->session->userdata('id_user');
		if(!$login) {
			$this->session->set_flashdata('error', 'Harap login terlebih dahulu!');
			redirect('backend');
		}

		$this->load->model('pengumuman_model');
	}
	
	public function index(){
		$description = 'Halaman pengumuman, silahkan melakukan insert, update maupun delete pengumuman';
		$title = 'Pengumuman - CWA Portal';
		$pengumuman = $this->db->join('user', 'user.id_user=pengumuman.id_user')->order_by('tanggal', 'desc')->get('pengumuman')->result_array();
		$content = 'backend/pengumuman/index';
		$this->load->view('backend/template', compact('content', 'description', 'title', 'pengumuman'));
	}

	public function tambah(){
		$description = 'Halaman pengumuman, silahkan melakukan insert, update maupun delete pengumuman';
		$title = 'Tambah Pengumuman - CWA Portal';

		if(!$_POST) {
			$input = (array) $this->pengumuman_model->getDefaultValues();
		} else {
			$input = (array) $this->input->post();
		}

		$config = [
	        'upload_path' => './uploads/gambar/',
	        'allowed_types' => 'jpg|png|doc|docx|pdf',
	        'max_size' => 2000,
	        'max_width' => 0,
	        'max_height' => 0,
	        'overwrite' => true,
	        'file_ext_tolower' => true
	      ];

	      $this->load->library('upload', $config);
	      	$this->upload->do_upload('gambar');
         	$gambar = $this->upload->data();
         	if($gambar) {
	        	$input['gambar'] = $gambar['file_name'];
	        }

	        $this->upload->do_upload('file');
         	$file = $this->upload->data();
	        if($file) {
	        	$input['file'] = $file['file_name'];
	        }

		if(!$this->pengumuman_model->validate()){
			$content = 'backend/pengumuman/form';
			$form_action = 'admin/pengumuman/tambah';
			$this->load->view('backend/template', compact('description', 'title', 'input', 'content', 'form_action'));
			return;
		}

		 $this->pengumuman_model->insert($input);
		 $this->session->set_flashdata('success', 'Data pengumuman berhasil ditambah');
		 redirect('admin/pengumuman');
	}

	public function edit($id){
		$description = 'Halaman pengumuman, silahkan melakukan insert, update maupun delete pengumuman';
		$title = 'Edit Pengumuman - CWA Portal';

		$pengumuman = $this->db->where('id_pengumuman', $id)->get('pengumuman')->row_array();

		if(!$_POST){
			$input = (array) $pengumuman;
		} else {
			$input = (array) $this->input->post();
			$input['gambar'] = $pengumuman['gambar'];
			$input['file'] = $pengumuman['file'];
		}

		if(!$this->pengumuman_model->validate()){
			$content = 'backend/pengumuman/form';
			$form_action = 'admin/pengumuman/edit/'.$id;
			$this->load->view('backend/template', compact('description', 'title', 'input', 'content', 'form_action'));
			return;
		}

		$config = [
	        'upload_path' => './uploads/gambar/',
	        'allowed_types' => 'jpg|png|doc|docx|pdf',
	        'max_size' => 2000,
	        'max_width' => 0,
	        'max_height' => 0,
	        'overwrite' => true,
	        'file_ext_tolower' => true
	      ];

	      $this->load->library('upload', $config);
	      	$this->upload->do_upload('gambar');
         	$gambar = $this->upload->data();
         	if($gambar) {
	        	$input['gambar'] = $gambar['file_name'];
	        }

	        $this->upload->do_upload('file');
         	$file = $this->upload->data();
	        if($file) {
	        	$input['file'] = $file['file_name'];
	        }

	     $this->pengumuman_model->update($input, $id);
		 $this->session->set_flashdata('success', 'Data pengumuman berhasil ditambah');
		 redirect('admin/pengumuman');
	}

	public function delete($id){
		$data = $this->db->where('id_pengumuman', $id)->get('pengumuman')->row_array();
		$this->db->where('id_pengumuman', $id)->delete('pengumuman');

		  if(file_exists("./uploads/gambar/".$data['gambar']) || file_exists("./uploads/gambar/".$data['file'])) {
		    unlink("./uploads/gambar/".$data['gambar']);
		    unlink("./uploads/gambar/".$data['file']);
		  }

		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect('admin/pengumuman');
	}

	public function details($id){
		$pengumuman = $this->db->where('id_pengumuman', $id)->get('pengumuman')->row_array();

		$description = 'Halaman pengumuman, silahkan melakukan insert, update maupun delete pengumuman';
		$content = 'backend/pengumuman/details';
		$title = $pengumuman['judul']. 'CWA Portal';
		$this->load->view('backend/template', compact('description', 'pengumuman', 'content', 'title'));
	}
}

 ?>