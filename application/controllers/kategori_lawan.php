<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_lawan extends CI_Controller {

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

	public function futsal(){

        $this->load->library('pagination');
        
        $config['base_url'] = site_url('kategori_lawan/futsal');
        $config['total_rows'] = $this->model_kategori->hitung_id_jadwal()->num_rows();;
        $config['per_page'] = 5;
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
        
        


        $data['judul']        ='Separing Kuy';
        $data['alert']        = $this->model_profil->tampil_alert();
        $data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
        $data['user']         = $this->model_profil->tampil_user();
        $data['futsal']       = $this->model_kategori->data_futsal($config["per_page"], $data['page']);
        $data['pagination']= $this->pagination->create_links();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('futsal',$data);
	    $this->load->view('templates/footer');

     }

        public function search_futsal(){
        
        $data['judul']        ='Separing Kuy';
        $keyword              = $this->input->post('cari');
        $data['alert']        = $this->model_profil->tampil_alert();
        $data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
        $data['user']         = $this->model_profil->tampil_user();
        $data['futsal']       = $this->model_kategori->search_futsal($keyword);
        $data['pagination']= $this->pagination->create_links();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar', $data);
                $this->load->view('futsal',$data);
                $this->load->view('templates/footer');
    }

                   //FOOTBAL
    public function football(){

        $this->load->library('pagination');
        
        $config['base_url'] = site_url('kategori_lawan/football');
        $config['total_rows'] = $this->model_kategori->hitung_id_jadwal_football()->num_rows();;
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        
               // Bootstrap 4, work very fine.
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
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
        

        $data['judul']        ='Separing Kuy';
        $data['alert']        = $this->model_profil->tampil_alert();
        $data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
        $data['user']         = $this->model_profil->tampil_user();
        $data['football']     = $this->model_kategori->data_football($config["per_page"], $data['page']);
        $data['pagination']   = $this->pagination->create_links();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('football',$data);
        $this->load->view('templates/footer');

     }

     public function search_football(){
        
        $data['judul']        ='Separing Kuy';
        $keyword              = $this->input->post('cari');
        $data['alert']        = $this->model_profil->tampil_alert();
        $data['jumlah_alert'] = $this->model_kategori->jumlah_alert();
        $data['user']         = $this->model_profil->tampil_user();
        $data['football']       = $this->model_kategori->search_football($keyword);
        $data['pagination']= $this->pagination->create_links();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar', $data);
                $this->load->view('football',$data);
                $this->load->view('templates/footer');
    }

}

/* End of file kategori_lawan.php */
/* Location: ./application/controllers/kategori_lawan.php */