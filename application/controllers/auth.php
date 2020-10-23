<?php  

class Auth extends CI_Controller{

	public function login(){
        
        $data['judul']  ='Separing Kuy ';
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('form_login', $data);

		}else{
			$auth = $this->model_auth->cek_login();

		  if($auth == FALSE){
		  	$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
             Username atau Password anda salah !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');

            redirect('auth/login');
		  }else{

            
		  	$this->session->set_userdata('email', $auth->email);
		  	$this->session->set_userdata('username', $auth->username);
		  	$this->session->set_userdata('bio', $auth->bio);
		  	$this->session->set_userdata('no_tlp', $auth->no_tlp);
		  	$this->session->set_userdata('email', $auth->email);
		  	$this->session->set_userdata('foto', $auth->foto);
		  	$this->session->set_userdata('home_base', $auth->home_base);
		  	$this->session->set_userdata('id_user', $auth->id_user);
		  	redirect('home');
		  }
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}