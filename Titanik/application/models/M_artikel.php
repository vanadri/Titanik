<?php 
class M_artikel extends CI_model{


   function get($id = null){
      $this->db->select('*');
      $this->db->from("artikel");
     if(!empty($id)){
      $this->db->where('artikel_id', $id);
     }
     $this->db->order_by('artikel_id DESC');
      $get = $this->db->get();

      if(!empty($id)){
         $get = $get->row();
      }else{
         $get = $get->result();
      }

      return $get;
   }

}