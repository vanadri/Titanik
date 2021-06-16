<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_pembeli extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');

      $this->load->model('m_pembeli', 'model');
      if(empty($this->session->userdata('user_id')) || $this->session->userdata('status') == 'pembeli' ){ redirect('adminpanel');} 
  }

	public function index()
	{
      $data['list'] = $this->model->get();
      $data['title'] = "User Pembeli List";
		$this->template->load('tmpl/vbacktmpl', 'admin/v_pembeli_list', $data);
	}

   public function is_form(){
      $id = $this->uri->segment(4);

      $dtc = new stdClass;
      $dtc->username = '';
      $dtc->password = '';
      $dtc->nama_depan = '';
      $dtc->nama_belakang = '';
      $dtc->alamat = '';
      $dtc->email = '';
      $dtc->no_hp = '';

      if(!empty($id)){
         $dtc =  $this->model->get($id);
      }

      if(isset($_POST['submit'])){
         $dtc->username = $this->input->post('username');
         $dtc->password = $this->input->post('password');
         $dtc->nama_depan = $this->input->post('nama_depan');
         $dtc->nama_belakang = $this->input->post('nama_belakang');
         $dtc->alamat = trim($this->input->post('alamat'));
         $dtc->email = $this->input->post('email');
         $dtc->no_hp = $this->input->post('no_hp');

         $dataIn['username'] =  $dtc->username;
         $dataIn['nama_depan'] =  $dtc->nama_depan;
         $dataIn['nama_belakang'] =  $dtc->nama_belakang;
         $dataIn['email'] =  $dtc->email;
         $dataIn['alamat'] =  $dtc->alamat;
         $dataIn['no_hp'] =  $dtc->no_hp;

         $is_isi = (!empty($dtc->username) && !empty($dtc->password) && !empty($dtc->nama_depan) && !empty($dtc->email) && !empty($dtc->no_hp) && !empty($dtc->alamat));
         $succ = false;
         if(!empty($id)){
            if(!empty($dtc->password)){
               $dataIn['password'] = $dtc->password;
            }
            $succ = $this->db->update('user_pembeli', $dataIn, array('pembeli_id' => $id));
         }else{
            if($is_isi){
               $dataIn['password'] = $dtc->password;
               $succ = $this->db->insert('user_pembeli', $dataIn);
            }
         }

            if($succ){
               redirect('admin/user_pembeli');
            }
      }


      $data['title'] = "Pembeli Form";
      $data['dtc'] = $dtc;
      $this->template->load('tmpl/vbacktmpl', 'admin/v_pembeli_form', $data);
   }

   function is_delete(){
      $id = $this->uri->segment(4);
      $this->db->delete('user_pembeli', array('pembeli_id'=> $id));
      redirect('admin/user_pembeli');
   }
}
