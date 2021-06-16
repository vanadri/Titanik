<?php 
class M_pembeli extends CI_model{


   function get($id = null){
      $this->db->select('*');
      $this->db->from("user_pembeli");
     if(!empty($id)){
      $this->db->where('pembeli_id', $id);
     }
     $this->db->order_by('pembeli_id DESC');
      $get = $this->db->get();

      if(!empty($id)){
         $get = $get->row();
      }else{
         $get = $get->result();
      }

      return $get;
   }

}