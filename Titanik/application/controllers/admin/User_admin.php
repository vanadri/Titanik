<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');

      $this->load->model('m_admin', 'model');
      if(empty($this->session->userdata('user_id')) || $this->session->userdata('status') == 'pembeli' ){ redirect('adminpanel');} 
  }

	public function index()
	{
      $data['list'] = $this->model->get();
      $data['title'] = "Admin List";
		$this->template->load('tmpl/vbacktmpl', 'admin/v_user_list', $data);
	}

   public function is_form(){
      $id = $this->uri->segment(4);

      $dtc = new stdClass;
      $dtc->username = '';
      $dtc->password = '';
      $dtc->full_name = '';
      $dtc->email = '';
      $dtc->no_hp = '';

      if(!empty($id)){
         $dtc =  $this->model->get($id);
      }

      if(isset($_POST['submit'])){
         $dtc->username = $this->input->post('username');
         $dtc->password = $this->input->post('password');
         $dtc->full_name = $this->input->post('full_name');
         $dtc->email = $this->input->post('email');
         $dtc->no_hp = $this->input->post('no_hp');

         $dataIn['username'] =  $dtc->username;
         $dataIn['full_name'] =  $dtc->full_name;
         $dataIn['email'] =  $dtc->email;
         $dataIn['no_hp'] =  $dtc->no_hp;

         $is_isi = (!empty($dtc->username) && !empty($dtc->password) && !empty($dtc->full_name) && !empty($dtc->email) && !empty($dtc->no_hp));
         $succ = false;
         if(!empty($id)){
            if(!empty($dtc->password)){
               $dataIn['password'] = $dtc->password;
            }
            $succ = $this->db->update('user_admin', $dataIn, array('admin_id' => $id));
         }else{
            if($is_isi){
               $dataIn['password'] = $dtc->password;
               $succ = $this->db->insert('user_admin', $dataIn);
            }
         }

            if($succ){
               redirect('admin/user_admin');
            }
      }


      $data['title'] = "Admin Form";
      $data['dtc'] = $dtc;
      $this->template->load('tmpl/vbacktmpl', 'admin/v_user_form', $data);
   }

   function is_delete(){
      $id = $this->uri->segment(4);
      $this->db->delete('user_admin', array('admin_id'=> $id));
      redirect('admin/user_admin');
   }
}
