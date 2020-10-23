<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	public function data_futsal($limit, $start){

 		$result = $this->db->where( array('kategori' => 'FUTSAL',
                             'lawan'    => ''))->get('jadwal_team', $limit, $start);
       $result->num_rows() > 0;
        return $result->result();
 	}

  public function hitung_id_jadwal(){

     $this->db->select('*');
     $this->db->from('jadwal_team');
     $this->db->where( array('kategori' => 'FUTSAL',
                             'lawan'    => ''));
     return $this->db->get();
     
    }

  public function search_futsal($keyword){

      $array = array('venue' => $keyword);
        $this->db->select('*');
        $this->db->from('jadwal_team');
        $this->db->where(array('kategori' => 'FUTSAL',
                               'lawan'    => ''));
        $this->db->like($array);
        $this->db->or_like('area', $keyword);
        $this->db->where(array('kategori' => 'FUTSAL',
                               'lawan'    => ''));
        return $this->db->get()->result();
    }

 	public function data_jadwal($id_alert){

    $result = $this->db->where('id_alert',$id_alert)->get('alert');
       $result->num_rows() > 0;
        return $result->result();
      
    }

    public function input_alert($data,$table){
		 $this->db->insert($table,$data);
    }

    public function jumlah_alert(){
    
    $this->db->like('id_user', $this->session->userdata('id_user'));
    $query = $this->db->get('alert');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

   public function futsal_alert($id_jadwal){

    $result = $this->db->where('id_jadwal',$id_jadwal)->get('jadwal_team');
       $result->num_rows() > 0;
        return $result->result();
      
    }

    public function hapus_alert($where,$table){
        $this->db->where($where);
    $this->db->delete($table);

   }

   public function auto_delete($where,$table){
        $this->db->where($where);
    $this->db->delete($table);

   }

   public function input_jadwal($data,$table){
     $this->db->insert($table,$data);
    }

       // FOOTBALL
    public function data_football($limit, $start){

    $result = $this->db->where( array('kategori' => 'FOOTBALL',
                                      'lawan'    => ''))->get('jadwal_team', $limit, $start);
       $result->num_rows() > 0;
        return $result->result();
  }

  public function hitung_id_jadwal_football(){

     $this->db->select('*');
     $this->db->from('jadwal_team');
     $this->db->where( array('kategori' => 'FOOTBALL',
                             'lawan'    => ''));
     return $this->db->get();
     
    }

    public function search_football($keyword){
    
      $array = array('venue' => $keyword);
        $this->db->select('*');
        $this->db->from('jadwal_team');
        $this->db->where(array('kategori' => 'FOOTBALL',
                               'lawan'    => ''));
        $this->db->like($array);
        $this->db->or_like('area', $keyword);
        $this->db->where(array('kategori' => 'FOOTBALL',
                               'lawan'    => ''));
        return $this->db->get()->result();
    }
	

}

/* End of file model_kategori.php */
/* Location: ./application/models/model_kategori.php */