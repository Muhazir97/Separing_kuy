<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profil extends CI_Model {

  public function tampil_user(){

    $result = $this->db->where('id_user',$this->session->userdata('id_user'))->get('user');
       $result->num_rows() > 0;
        return $result->result();
     
    }

    public function tampil_alert(){

    $result = $this->db->where('id_user',$this->session->userdata('id_user'))->get('alert');
       $result->num_rows() > 0;
        return $result->result();
     
    }

	 public function tampil_pemain($limit,$start){

    $result = $this->db->where('id_user',$this->session->userdata('id_user'))->get('data_pemain', $limit, $start);
       $result->num_rows() > 0;
        return $result->result();
     
    }

    public function hitung_id_pemain(){

     $this->db->select('*');
     $this->db->from('data_pemain');
     $this->db->where('id_user', $this->session->userdata('id_user'));

     return $this->db->get(); 
     
    }

    public function tampil_jadwal($limit,$start){

    $result = $this->db->where('id_user',$this->session->userdata('id_user'))->get('jadwal_team', $limit, $start);
       $result->num_rows() > 0;
        return $result->result();
     
    }

    public function hitung_id_jadwal(){

     $this->db->select('*');
     $this->db->from('jadwal_team');
     $this->db->where('id_user', $this->session->userdata('id_user'));

     return $this->db->get(); 
     
    }

    public function tampil_history($limit,$start){

    $result = $this->db->where('id_user',$this->session->userdata('id_user'))->get('history_team',$limit, $start);
       $result->num_rows() > 0;
        return $result->result();
     
    }

    public function hitung_id_history(){

     $this->db->select('*');
     $this->db->from('history_team');
     $this->db->where('id_user', $this->session->userdata('id_user'));
     return $this->db->get(); 
     
    }

     public function edit_user($where,$table){
    return $this->db->get_where($table,$where);

  }

    public function update_user($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
     }

    public function tambah_pemain($data,$table){
		 $this->db->insert($table,$data);
    }

    public function edit_pemain($where,$table){
		return $this->db->get_where($table,$where);

	}

	public function update_pemain($where,$data,$table){
	 	$this->db->where($where);
	 	$this->db->update($table,$data);
   }

	 public function hapus_data($where,$table){
   	    $this->db->where($where);
	 	$this->db->delete($table);

   }

   public function buat_jadwal($data,$table){
     $this->db->insert($table,$data);
    }

    public function edit_jadwal($where,$table){
    return $this->db->get_where($table,$where);

  }

  public function update_jadwal($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
   }

    public function hapus_jadwal($where,$table){
        $this->db->where($where);
    $this->db->delete($table);

   }

   public function auto_delete_jadwal($where,$table){
        $this->db->where($where);
    $this->db->delete($table);

   }

   public function tambah_history($data,$table){
     $this->db->insert($table,$data);
    }

    public function edit_history($where,$table){
    return $this->db->get_where($table,$where);

  }

  public function update_history($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
   }

   public function hapus_history($where,$table){
        $this->db->where($where);
    $this->db->delete($table);

   }

   public function cek_kategori($id_alert){

    $result     = $this->db->where('id_alert', $id_alert)
                           ->limit(1)
                           ->get('alert');

     if($result->num_rows() > 0){
      return $result->row();
     }else{
      return array();
     }
  }
	

}

/* End of file model_profil.php */
/* Location: ./application/models/model_profil.php */