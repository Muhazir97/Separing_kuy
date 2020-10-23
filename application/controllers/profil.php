<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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

	public function index(){

    $this->load->library('pagination');
    //tampil pemain
    $config['base_url']    = site_url('profil/index');
    $config['total_rows']  = $this->model_profil->hitung_id_pemain()->num_rows();
    $config['per_page']    = 5;
    $config['uri_segment'] = 3;
    // Bootstrap 4, work very fine.
    $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['attributes'] = ['class' => 'page-link'];
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = 'Prev';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = 'Next';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';
    $config['attributes'] = array('class' => 'page-link');
    $this->pagination->initialize($config);
    $data['page']      =($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $data['pemain']  = $this->model_profil->tampil_pemain($config["per_page"], $data['page']);
    $data['pagination'] = $this->pagination->create_links();

    //Jadwal Pertandingan
    $config['base_url']    = site_url('profil/index');
    $config['total_rows']  = $this->model_profil->hitung_id_jadwal()->num_rows();
    $config['per_page']    = 5;
    $config['uri_segment'] = 3;
    // Bootstrap 
    $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['attributes'] = ['class' => 'page-link'];
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = 'Prev';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = 'Next';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';
    $config['attributes'] = array('class' => 'page-link');
    $this->pagination->initialize($config);
    $data['page']      =($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $data['jadwal']  = $this->model_profil->tampil_jadwal($config["per_page"], $data['page']);
    $data['pagination_jadwal'] = $this->pagination->create_links();

    //Jadwal Pertandingan
    $config['base_url']    = site_url('profil/index');
    $config['total_rows']  = $this->model_profil->hitung_id_history()->num_rows();
    $config['per_page']    = 5;
    $config['uri_segment'] = 3;
    // Bootstrap 
    $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['attributes'] = ['class' => 'page-link'];
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = 'Prev';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = 'Next';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';
    $config['attributes'] = array('class' => 'page-link');
    $this->pagination->initialize($config);
    $data['page']      =($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $data['history']  = $this->model_profil->tampil_history($config["per_page"], $data['page']);
    $data['pagination_history'] = $this->pagination->create_links();
    
    		$data['judul']   ='Separing Kuy';
        $data['alert']   = $this->model_profil->tampil_alert();
        $data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
    		$data['user']    = $this->model_profil->tampil_user();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar',$data);
		    $this->load->view('profil', $data);
		    $this->load->view('templates/footer');
	}

      /* Controller Profil/User */
    public function edit_profil($id){
    	
    	$data['judul']       ='Separing Kuy ';
    	$where = array('id_user' =>$id);
      $data['alert']   = $this->model_profil->tampil_alert();
    $data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
		$data['user']  = $this->model_profil->tampil_user();
    	$data['user'] =$this->model_profil->edit_user($where, 'user')->result();
    	$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('edit_user', $data);
		$this->load->view('templates/footer');
    }

     public function update_user(){

		$id_user           =$this->input->post('id_user');
		$username          =$this->input->post('username');
		$bio               =$this->input->post('bio');
		$no_tlp            =$this->input->post('no_tlp');
		$email_team        =$this->input->post('email_team');
		$home_base         =$this->input->post('home_base');

		if($_FILES['foto']['name']!="")
		{
        $config['upload_path']   = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('foto'))
        {
          $error = array('error' => $this->upload->display_errors());
        }
        else{
            $upload_data=$this->upload->data();
            $foto=$upload_data['file_name'];
        }
       }
       else{
             $foto=$this->input->post('old_image');
            }

		$data = array (
 
			'username'      =>$username,
			'bio'           =>$bio,
			'no_tlp'        =>$no_tlp,
			'email_team'    =>$email_team,
            'home_base'     =>$home_base,
			'foto'          =>$foto,

		);

		$where = array(
		'id_user' => $id_user
	     );

		$this->model_profil->update_user($where,$data,'user');
		redirect('profil/index');

	}
        /* End Controller Profil/User */


        /* Controller Pemain */
	public function tambah_pemain()
    {
    	
    $id_user      =$this->input->post('id_user');
		$no_punggung  =$this->input->post('no_punggung');
		$nama         =$this->input->post('nama');
		$usia         =$this->input->post('usia');
		if($_FILES['foto']['name']!="")
		{
        $config['upload_path']   = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('foto'))
        {
          $error = array('error' => $this->upload->display_errors());
        }
        else{
            $upload_data=$this->upload->data();
            $foto=$upload_data['file_name'];
        }
       }
       else{
       	     $foto = "default_player.png";
            }

	  $data = array(

      	   'id_user'      => $id_user,
      	   'no_punggung'  => $no_punggung,
      	   'nama'         => $nama,
      	   'usia'         => $usia,
      	   'foto'         => $foto,
      	 );

      	 $this->model_profil->tambah_pemain($data, 'data_pemain');
      redirect ('profil/index');	
    }

    public function edit($id){
    	
    	$data['judul']       ='Separing Kuy ';
    	$where = array('id_pemain' =>$id);
      $data['alert']   = $this->model_profil->tampil_alert();
    $data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
		$data['user']  = $this->model_profil->tampil_user();
    	$data['pemain'] =$this->model_profil->edit_pemain($where, 'data_pemain')->result();
    	$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('edit_pemain', $data);
		$this->load->view('templates/footer');
    }

    public function update(){

    	$id_pemain         =$this->input->post('id_pemain');
		$id_user           =$this->input->post('id_user');
		$no_punggung       =$this->input->post('no_punggung');
		$nama              =$this->input->post('nama');
		$usia              =$this->input->post('usia');

		if($_FILES['foto']['name']!="")
		{
        $config['upload_path'] = './upload/';
        $config['allowed_types'] =     'gif|jpg|png|jpeg|';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('foto'))
        {
          $error = array('error' => $this->upload->display_errors());
        }
        else{
            $upload_data=$this->upload->data();
            $foto=$upload_data['file_name'];

            $row = $this->db->where('id_pemain',$id_pemain)->get('data_pemain')->row();
            unlink('upload/'.$row->foto);
        }
       }
       else{
                $foto=$this->input->post('old_image');
            }

		$data = array (
 

			'id_user'       =>$id_user,
			'no_punggung'   =>$no_punggung,
			'nama'          =>$nama,
			'usia'          =>$usia,
			'foto'          =>$foto,

		);

		$where = array(
		'id_pemain' => $id_pemain
	     );

		$this->model_profil->update_pemain($where,$data,'data_pemain');
		redirect('profil/index');

	}

    public function hapus($id){

    	$row = $this->db->where('id_pemain',$id)->get('data_pemain')->row();
        unlink('upload/'.$row->foto);
		$where = array ('id_pemain' => $id);
		$this->model_profil->hapus_data($where, 'data_pemain');
		redirect ('profil/index');
	}
	    /* End Controller Pemain */

	    /* Controller buat jadwal */
	public function buat_jadwal()
    {
    	
    $id_user      =$this->input->post('id_user');
    $username     =$this->input->post('username');
		$kategori     =$this->input->post('kategori');
		$venue        =$this->input->post('venue');
		$tanggal      =$this->input->post('tanggal');
		$jam          =$this->input->post('jam');
		$area         =$this->input->post('area');
		$lawan        =$this->input->post('lawan');

	  $data = array(

      	   'id_user'      => $id_user,
           'username'     => $username,
      	   'kategori'     => $kategori,
      	   'venue'        => $venue,
      	   'tanggal'      => $tanggal,
      	   'jam'          => $jam,
      	   'area'         => $area,
      	   'lawan'        => $lawan,

      	 );

      	 $this->model_profil->buat_jadwal($data, 'jadwal_team');
      redirect ('profil/index');	
    }

    public function hapus_jadwal($id){

		$where = array ('id_jadwal' => $id);
		$this->model_profil->hapus_jadwal($where, 'jadwal_team');
		redirect ('profil/index');
	}

  public function auto_delete_jadwal(){

        $date = date_default_timezone_set('Asia/Jakarta');
    $where = array ('tanggal' => $date);
    $this->model_profil->auto_delete_jadwal($where, 'jadwal_team');
    redirect ('profil/index');
  }


	    /* Controller History */
	public function tambah_history()
    {
    	
    	$id_user      =$this->input->post('id_user');
		$team         =$this->input->post('team');
		$skor_akhir   =$this->input->post('skor_akhir');
		$team_lawan   =$this->input->post('team_lawan');

	  $data = array(

      	   'id_user'      => $id_user,
      	   'team'         => $team,
      	   'skor_akhir'   => $skor_akhir,
      	   'team_lawan'   => $team_lawan,
      	 );

      	 $this->model_profil->tambah_history($data, 'history_team');
      redirect ('profil/index');	
    }

    public function edit_history($id){
    	
    	$data['judul']       ='Separing Kuy ';
    	$where = array('id_history' =>$id);
      $data['alert']   = $this->model_profil->tampil_alert();
    $data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
		$data['user']    = $this->model_profil->tampil_user();
    	$data['history'] =$this->model_profil->edit_history($where, 'history_team')->result();
    	$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('edit_history', $data);
		$this->load->view('templates/footer');
    }

     public function update_history(){

    	$id_history        =$this->input->post('id_history');
		$id_user           =$this->input->post('id_user');
		$team              =$this->input->post('team');
		$skor_akhir        =$this->input->post('skor_akhir');
		$team_lawan        =$this->input->post('team_lawan');

		$data = array (
 

			'id_user'       =>$id_user,
			'team'          =>$team,
			'skor_akhir'    =>$skor_akhir,
			'team_lawan'    =>$team_lawan,

		);

		$where = array(
		'id_history' => $id_history
	     );

		$this->model_profil->update_history($where,$data,'history_team');
		redirect('profil/index');

	}

	public function hapus_history($id){

		$where = array ('id_history' => $id);
		$this->model_profil->hapus_history($where, 'history_team');
		redirect ('profil/index');
	}
	  /* End Controller History */

}

/* End of file profil.php */
/* Location: ./application/controllers/profil.php */