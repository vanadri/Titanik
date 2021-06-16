<?php 
class M_transaksi extends CI_model{


   function get($id = null, $user_id = null){
      $this->db->select('a.transaksi_id, a.qty, a.tanggal, a.barang_id, a.alamat_pengiriman, a.status, c.nama_depan as nama_pembeli, d.barang_nama');
      $this->db->from("transaksi a");
      $this->db->join("user_penjual b", "b.penjual_id = a.penjual_id", "inner");
      $this->db->join("user_pembeli c", "c.pembeli_id = a.pembeli_id", "inner");
      $this->db->join("barang d", "d.barang_id = a.barang_id", "inner");
     if(!empty($id)){
      $this->db->where('a.transaksi_id', $id);
     }

     if(!empty($user_id)){
         $this->db->where('a.penjual_id', $user_id);
     }

     $this->db->order_by('a.transaksi_id DESC');
      $get = $this->db->get();

      if(!empty($id)){
         $get = $get->row();
      }else{
         $get = $get->result();
      }

      return $get;
   }

}