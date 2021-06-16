<?php 
class M_admin extends CI_model{


   function get($id = null){
      $this->db->select('*');
      $this->db->from("user_admin");
     if(!empty($id)){
      $this->db->where('admin_id', $id);
     }
      $this->db->order_by('admin_id DESC');
      $get = $this->db->get();

      if(!empty($id)){
         $get = $get->row();
      }else{
         $get = $get->result();
      }

      return $get;
   }

}