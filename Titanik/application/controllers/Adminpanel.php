<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');

      $this->load->model('m_admin', 'model');
  }

	public function index()
	{
      $data['list'] = $this->model->get();
      $data['title'] = "Admin List";
		// $this->template->load('tmpl/vbacktmpl', 'admin/v_user_list', $data);
      $this->load->view('tmpl/login');
	}

	public function login(){
		$username = $this->input->post('identity');
		$password = $this->input->post('password');

		$this->db->where(array('username' => $username,
							  'password' => $password));
		$row = $this->db->get('user_admin')->row();
		if(!empty($row)){
			$this->session->set_userdata(array(
					'username'=>$row->username,
					'user_id' => $row->admin_id, 
					'full_name' => $row->full_name,
					'status' => 'admin',
				));

			redirect('admin/dashboard');
		}else{
			redirect('adminpanel');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
