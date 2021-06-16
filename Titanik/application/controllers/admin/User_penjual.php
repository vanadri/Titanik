<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_penjual extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');

      $this->load->model('m_penjual', 'model');
      if(empty($this->session->userdata('user_id')) || $this->session->userdata('status') == 'pembeli' ){ redirect('adminpanel');} 
  }

	public function index()
	{
      $data['list'] = $this->model->get();
      $data['title'] = "Penjual List";
		$this->template->load('tmpl/vbacktmpl', 'admin/v_penjual_list', $data);
	}

   public function is_form(){
      $id = $this->uri->segment(4);

      $dtc = new stdClass;
      $dtc->username = '';
      $dtc->password = '';
      $dtc->nama_depan = '';
      $dtc->nama_belakang = '';
      $dtc->email = '';
      $dtc->no_hp = '';
      $dtc->alamat = '';
      $dtc->nama_toko = '';

      if(!empty($id)){
         $dtc =  $this->model->get($id);
      }

      if(isset($_POST['submit'])){
         $dtc->username = $this->input->post('username');
         $dtc->password = $this->input->post('password');
         $dtc->nama_depan = $this->input->post('nama_depan');
         $dtc->nama_belakang = $this->input->post('nama_belakang');
         $dtc->nama_toko = $this->input->post('nama_toko');
         $dtc->alamat = $this->input->post('alamat');
         $dtc->email = $this->input->post('email');
         $dtc->no_hp = $this->input->post('no_hp');

         $dataIn['username'] =  $dtc->username;
         $dataIn['nama_depan'] =  $dtc->nama_depan;
         $dataIn['nama_belakang'] =  $dtc->nama_belakang;
         $dataIn['email'] =  $dtc->email;
         $dataIn['no_hp'] =  $dtc->no_hp;
         $dataIn['nama_toko'] =  $dtc->nama_toko;
         $dataIn['alamat'] =  $dtc->alamat;
         
         $is_isi = (!empty($dtc->username) && !empty($dtc->password) && !empty($dtc->nama_depan) && !empty($dtc->email) && !empty($dtc->no_hp) && !empty($dtc->alamat) && !empty($dtc->nama_toko));
         $succ = false;

         if(!empty($id)){
            if(!empty($dtc->password)){
               $dataIn['password'] = $dtc->password;
            }
            $succ = $this->db->update('user_penjual', $dataIn, array('penjual_id' => $id));
         }else{
            if($is_isi){
               $dataIn['password'] = $dtc->password;
               $succ = $this->db->insert('user_penjual', $dataIn);
            }
         }

            if($succ){
               redirect('admin/user_penjual');
            }
      }


      $data['title'] = "Penjual Form";
      $data['dtc'] = $dtc;
      $this->template->load('tmpl/vbacktmpl', 'admin/v_penjual_form', $data);
   }

   function is_delete(){
      $id = $this->uri->segment(4);
      $this->db->delete('user_penjual', array('penjual_id'=> $id));
      redirect('admin/user_penjual');
   }
}
