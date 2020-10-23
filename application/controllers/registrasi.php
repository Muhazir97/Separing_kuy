<?php  

class Registrasi extends CI_Controller{

	public function index(){

        $data['judul']  ='Separing Kuy ';
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Password2', 'matches[password]');

		if($this->form_validation->run() == FALSE){
			$this->load->view('registrasi', $data);
		}else{
			$data = array(

                'id_user'     => '',
                'username'    => $this->input->post('username'),
                'email'       => $this->input->post('email'),
                'password'    => $this->input->post('password'),
                'foto'        => $this->input->post('foto'),

			   );
			$this->db->insert('user', $data);
			redirect('auth/login');
		}
	}
}