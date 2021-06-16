<?php 
class M_penjual extends CI_model{


   function get($id = null){
      $tipe = $this->session->userdata('status');
      $idx = $this->session->userdata('user_id');
      $this->db->select('*');
      $this->db->from("user_penjual");

      if($tipe == 'penjual'){
         $this->db->where('penjual_id', $idx);
      }else{
         if(!empty($id)){
            $this->db->where('penjual_id', $id);
         }

         $this->db->order_by('penjual_id DESC');
      }

      $get = $this->db->get();
   
      if(!empty($id)){
         $get = $get->row();
      }else{
         $get = $get->result();
      }
     

      return $get;
   }

}