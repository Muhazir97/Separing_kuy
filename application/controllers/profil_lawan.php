<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_lawan extends CI_Controller {

	public function  __construct() {
		parent::__construct();

		if ($this->session->userdata('id_user') != true){
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
             Anda belum login cuy, login dulu gih !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
		}
	}

	public function index($id_user)
	{
		
		$id_pengirim      = 'id_user';

		$data['judul']   ='Separing Kuy';
		$data['alert']   = $this->model_profil->tampil_alert();
		$data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
		$data1['user']   = $this->model_profil_lawan->navbar();
		$data['user']    = $this->model_profil_lawan->tampil_user($id_user);
		$data['pemain']  = $this->model_profil_lawan->tampil_pemain($id_user);
		$data['jadwal']  = $this->model_profil_lawan->tampil_jadwal($id_user);
		$data['history'] = $this->model_profil_lawan->tampil_history($id_user);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar',$data1);
		$this->load->view('profil_lawan', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file profil_lawan.php */
/* Location: ./application/controllers/profil_lawan.php */