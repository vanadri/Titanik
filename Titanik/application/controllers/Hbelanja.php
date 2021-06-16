<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hbelanja extends CI_Controller {

	
   
	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');
      $this->load->model('m_barang', 'model');
  }

	public function index()
	{
      $data['list'] = $this->model->get();
      $data['list_cnt'] = count($this->model->get());
		$this->template->load('tmpl/front/vfronttmpl', 'front/vbelanja_list', $data);
	}

	public function detail(){
		$id = $this->uri->segment(3);
		$datas =  $this->model->get($id);
		$data['rows'] = $datas;
		$this->template->load('tmpl/front/vfronttmpl', 'front/vbelanja_detail', $data);
	}

	public function checkout(){
		$id = $this->uri->segment(3);
		$qty = $this->uri->segment(4);
		$datas =  $this->model->get($id);
		$data['rows'] = $datas;
		$data['qty'] = $qty;
		$this->template->load('tmpl/front/vfronttmpl', 'front/vbelanja_checkout', $data);
	}

	public function insert_transaksi(){
		$barang_id = $this->input->post('barang_id');
		$dataIn['penjual_id'] = $this->input->post('penjual_id');
		$dataIn['qty'] = $this->input->post('qty');
		$dataIn['barang_id'] = $barang_id;
		$dataIn['alamat_pengiriman'] = $this->input->post('alamat');
		$dataIn['pembeli_id'] = $this->session->userdata('user_id');
		$dataIn['status'] = 0;
		$dataIn['tanggal'] = date('Y-m-d H:i:s');

		$exec = $this->db->insert('transaksi', $dataIn);
		// $exex2 = $this->db->update('barang', array('qty' => 'qty - '.$qty), array('barang_id' => $barang_id));
		// $exec = ($exec && $exex2);
		echo json_encode($exec);
	}
}
