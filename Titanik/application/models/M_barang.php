<?php 
class M_barang extends CI_model{


   function get($id = null, $user_id = null){
      $this->db->select('*');
      $this->db->from("barang a");
      $this->db->join("user_penjual b", "b.penjual_id = a.penjual_id", "inner");
     if(!empty($id)){
      $this->db->where('a.barang_id', $id);
     }

     if(!empty($user_id)){
         $this->db->where('a.penjual_id', $user_id);
     }
     $this->db->order_by('a.barang_id DESC');
      $get = $this->db->get();

      if(!empty($id)){
         $get = $get->row();
      }else{
         $get = $get->result();
      }

      return $get;
   }

}