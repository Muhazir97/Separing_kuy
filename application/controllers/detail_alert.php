<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_alert extends CI_Controller {

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

	public function index($id_alert){

		$cek = $this->model_profil->cek_kategori($id_alert);

    	 	if($cek == false){

            redirect('auth/login');
		  }else{

		  	$this->session->set_userdata('isi_notif', $cek->isi_notif);
		  	switch($cek->isi_notif){
		  		case ' MENGAJUKAN separing pada jadwal yang ini...'  : redirect('detail_alert/mengajukan/' .$id_alert);
		  		          break;
		  		case ' Pengajuan separing anda di KONFIRMASI...'  : redirect('detail_alert/konfirmasi/' .$id_alert);
		  		          break;
                default: break;

		  	}
		  }
}

      public function mengajukan($id_alert){

		$data['judul']        ='Separing Kuy';
		$data['alert']        = $this->model_profil->tampil_alert();
		$data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
		$data1['user']        = $this->model_profil_lawan->navbar();
		$data['futsal']       = $this->model_kategori->data_jadwal($id_alert);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar',$data1);
		$this->load->view('detail_alert', $data);
		$this->load->view('templates/footer');
		
	}

	public function konfirmasi($id_alert){

		$data['judul']        ='Separing Kuy';
		$data['alert']        = $this->model_profil->tampil_alert();
		$data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
		$data1['user']        = $this->model_profil_lawan->navbar();
		$data['futsal']       = $this->model_kategori->data_jadwal($id_alert);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar',$data1);
		$this->load->view('detail_alert_konfirmasi', $data);
		$this->load->view('templates/footer');
		
	}  

	public function input_alert(){

		$id_user      = $this->input->post('id_user');
		$id_jadwal    = $this->input->post('id_jadwal');
		$id_pengirim  = $this->input->post('id_pengirim');
		$username     = $this->input->post('username');
		$isi_notif    = $this->input->post('isi_notif');
        date_default_timezone_set('Asia/Jakarta');

        $kategori      = $this->input->post('kategori');
		$venue         = $this->input->post('venue');
		$tanggal       = $this->input->post('tanggal');
		$jam           = $this->input->post('jam');
		$area          = $this->input->post('area');
		$lawan         = $this->input->post('lawan');

		$data = array(
			'id_user'     => $id_user,
			'id_jadwal'   => $id_jadwal,
			'id_pengirim' => $id_pengirim,
			'username'    => $username,
			'isi_notif'   => $isi_notif,
			'tgl'         => date('Y-m-d H:i:s'),

			'kategori'     => $kategori,
			'venue'        => $venue,
			'tanggal'      => $tanggal,
			'jam'          => $jam,
			'area'         => $area,
			'lawan'        => $lawan,
			
			);
		$this->model_kategori->input_alert($data,'alert');
		redirect('kuylah/index/'. $id_jadwal);
	}

	public function input_alert_konfirmasi($id_alert){

		$id_user      = $this->input->post('id_user');
		$id_jadwal    = $this->input->post('id_jadwal');
		$id_pengirim  = $this->input->post('id_pengirim');
		$username     = $this->input->post('username');
		$isi_notif    = $this->input->post('isi_notif');
        date_default_timezone_set('Asia/Jakarta');

        $kategori      = $this->input->post('kategori');
		$venue         = $this->input->post('venue');
		$tanggal       = $this->input->post('tanggal');
		$jam           = $this->input->post('jam');
		$area          = $this->input->post('area');
		$lawan         = $this->input->post('lawan');

		$data = array(
			'id_user'     => $id_user,
			'id_jadwal'   => $id_jadwal,
			'id_pengirim' => $id_pengirim,
			'username'    => $username,
			'isi_notif'   => $isi_notif,
			'tgl'         => date('Y-m-d H:i:s'),

			'kategori'     => $kategori,
			'venue'        => $venue,
			'tanggal'      => $tanggal,
			'jam'          => $jam,
			'area'         => $area,
			'lawan'        => $lawan,
			
			);
		$this->model_kategori->input_alert($data,'alert');
		redirect('detail_alert/edit_jadwal/'. $id_alert);
	}

     public function edit_jadwal($id_alert){
    	
    	  $data['judul']     ='Separing Kuy ';
    	  $where = array('id_alert' =>$id_alert);
    	  $data['alert']        = $this->model_profil->tampil_alert();
		  $data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
		  $data1['user']        = $this->model_profil_lawan->navbar();
		  $data['user']      = $this->model_profil->tampil_user();
    	  $data['jadwal']    =$this->model_profil->edit_jadwal($where, 'alert')->result();


    	  $this->load->view('templates/header', $data);
		  $this->load->view('templates/navbar', $data);
		  $this->load->view('edit_jadwal', $data);
		  $this->load->view('templates/footer');
    }

    public function update_jadwal(){

        $id_alert          =$this->input->post('id_alert');
        $id_jadwal         =$this->input->post('id_jadwal');
		$id_user           =$this->input->post('id_user');
		$kategori          =$this->input->post('kategori');
		$venue             =$this->input->post('venue');
		$tanggal           =$this->input->post('tanggal');
        $jam               =$this->input->post('jam');
        $area              =$this->input->post('area');
        $lawan             =$this->input->post('lawan');

		$data = array (
      
			'id_user'       =>$id_user,
			'kategori'      =>$kategori,
			'venue'         =>$venue,
			'tanggal'       =>$tanggal,
			'jam'           =>$jam,
			'area'          =>$area,
			'lawan'         =>$lawan,
		);

		$where = array(
		'id_jadwal' => $id_jadwal
	     );

		$this->model_profil->update_jadwal($where,$data,'jadwal_team');
		redirect('detail_alert/hapus_alert/'.$id_alert);

	}


	public function hapus_alert($id_alert){

		$where = array ('id_alert' => $id_alert);
		$this->model_kategori->hapus_alert($where, 'alert');
		redirect ('profil/index');
	}

	public function auto_delete(){

        $lama = 1; 

        $date = date_default_timezone_set('Asia/Jakarta');
		$where = "DATEDIFF(CURDATE(), tanggal) > $lama";
		$this->model_kategori->auto_delete($where, 'alert');
		redirect ('profil/index');
	}

	public function input_jadwal($id_alert){ 

        $id_user       = $this->input->post('id_user');
        $kategori      = $this->input->post('kategori');
		$venue         = $this->input->post('venue');
		$tanggal       = $this->input->post('tanggal');
		$jam           = $this->input->post('jam');
		$area          = $this->input->post('area');
		$lawan         = $this->input->post('lawan');

		$data = array(
 
            'id_user'      => $id_user,
			'kategori'     => $kategori,
			'venue'        => $venue,
			'tanggal'      => $tanggal,
			'jam'          => $jam,
			'area'         => $area,
			'lawan'        => $lawan,
			
			);
		$this->model_kategori->input_jadwal($data,'jadwal_team');
		redirect('detail_alert/hapus_alert/'.$id_alert);
	}

}

/* End of file detail_alert.php */
/* Location: ./application/controllers/detail_alert.php */