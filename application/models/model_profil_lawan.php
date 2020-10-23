<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profil_lawan extends CI_Model {

	public function navbar(){

    $result = $this->db->where('id_user',$this->session->userdata('id_user'))->get('user');
       $result->num_rows() > 0;
        return $result->result();
     
    }

	public function tampil_user($id_user){

    $result = $this->db->where('id_user',$id_user)->get('user');
       $result->num_rows() > 0;
        return $result->result();
     
    }

	 public function tampil_pemain($id_user){

    $result = $this->db->where('id_user',$id_user)->get('data_pemain');
       $result->num_rows() > 0;
        return $result->result();
     
    }

    public function tampil_jadwal($id_user){

    $result = $this->db->where('id_user',$id_user)->get('jadwal_team');
       $result->num_rows() > 0;
        return $result->result();
     
    }

    public function tampil_history($id_user){

    $result = $this->db->where('id_user',$id_user)->get('history_team');
       $result->num_rows() > 0;
        return $result->result();
     
    }

	

}

/* End of file model_profil_lawan.php */
/* Location: ./application/models/model_profil_lawan.php */