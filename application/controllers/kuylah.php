<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuylah extends CI_Controller {

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

	public function index($id_jadwal)
	{
		$data['judul']        ='Separing Kuy';
		$data['alert']        = $this->model_profil->tampil_alert();
		$data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
		$data1['user']        = $this->model_profil_lawan->navbar();
		$data['futsal_alert'] = $this->model_kategori->futsal_alert($id_jadwal);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar',$data1);
		$this->load->view('kuy_sukses', $data);
		$this->load->view('templates/footer');
		
	}

}

/* End of file kuylah.php */
/* Location: ./application/controllers/kuylah.php */