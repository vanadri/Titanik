<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');

      $this->load->model('m_penjual', 'mpenjual');
      $this->load->model('m_pembeli', 'mpembeli');
  }

	public function index()
	{
      $data['list'] = $this->model->get();
      $data['title'] = "Admin List";
		// $this->template->load('tmpl/vbacktmpl', 'admin/v_user_list', $data);
      $this->load->view('tmpl/login');
	}

	public function login(){
		$true = false;
		$message = "";

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$masuk_as = $this->input->post('masuk_as');

		$this->db->where(array('username' => $username,
							        'password' => $password));
		if($masuk_as == 1){
			$row = $this->db->get('user_pembeli')->row();
			if(!empty($row)){
				$this->session->set_userdata(array(
						'username'=>$row->username,
						'user_id' => $row->pembeli_id, 
						'full_name' => $row->nama_depan.' '.$row->nama_belakang,
						'status' => 'pembeli',
					));

					$true = true;
					$message = "";
			}else{
					$true = false;
					$message = 'Login gagal! Harap periksa kembali username/email atau password anda dengan benar';
			}
	}else{
		$row = $this->db->get('user_penjual')->row();
		if(!empty($row)){
			$this->session->set_userdata(array(
				'username'=>$row->username,
				'user_id' => $row->penjual_id, 
				'full_name' => $row->nama_depan.' '.$row->nama_belakang,
				'status' => 'penjual',
			));

			$true = true;
			$message = "";
	}else{
			$true = false;
			$message = 'Login gagal! Harap periksa kembali username/email atau password anda dengan benar';
		}
	}

	$data['status'] = $true;
	$data['message'] = $message;
	$data['masuk_as'] = $masuk_as; 

	echo json_encode($data);
}

	function register(){
		$nama_depan = trim($this->input->post('nama_depan'));
		$nama_belakang = trim($this->input->post('nama_belakang'));
		$username = trim($this->input->post('username'));
		$password = trim($this->input->post('password'));

		$masuk_as = $this->input->post('masuk_as');

		$dataIn['nama_depan'] = $nama_depan;
		$dataIn['nama_belakang'] = $nama_belakang;
		$dataIn['username'] = $username;
		$dataIn['password'] = $password;

		if($masuk_as == 1){
			$succ = $this->db->insert('user_pembeli', $dataIn);
			if($succ){
				$ids = $this->db->insert_id();
				$this->session->set_userdata(array(
					'username'=>$username,
					'user_id' => $ids, 
					'full_name' => $nama_depan.' '.$nama_belakang,
					'status' => 'pembeli',
				));
			}
			
		}else{
			$succ = $this->db->insert('user_penjual', $dataIn);
			if($succ){
				$ids = $this->db->insert_id();
				$this->session->set_userdata(array(
					'username'=>$username,
					'user_id' => $ids, 
					'full_name' => $nama_depan.' '.$nama_belakang,
					'status' => 'penjual',
				));
				redirect('admin/dashboard');
			}
			
		}

		redirect('home');
		
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
