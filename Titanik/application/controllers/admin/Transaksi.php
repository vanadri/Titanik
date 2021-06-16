<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');

      $this->load->model('m_transaksi', 'model');
      if(empty($this->session->userdata('user_id')) || $this->session->userdata('status') == 'pembeli' ){ redirect('adminpanel');} 
  }

	public function index()
	{
      $user_id = $this->session->userdata('user_id');
      $data['list'] = $this->model->get(null, $user_id);
      $data['title'] = "Transaksi List";
		$this->template->load('tmpl/vbacktmpl', 'admin/v_transaksi_list', $data);
	}

   public function is_update(){
      $id = $this->uri->segment(4);
      $status = $this->uri->segment(5);
      $datax = $this->model->get($id);
      if($status == 1 && !empty($datax)){
         $this->db->query('UPDATE barang SET barang_qty = barang_qty - '.$datax->qty.' WHERE barang_id = '.$datax->barang_id); //('barang', array('barang_qty' => 'barang_qty - '. $datax->qty),  array('barang_id' => $datax->barang_id));
        
      }

      $this->db->update('transaksi', array('status' => $status),  array('transaksi_id' => $id));
      redirect('admin/transaksi');
   }  


}
