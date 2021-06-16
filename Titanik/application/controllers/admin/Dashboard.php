<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');
		if(empty($this->session->userdata('user_id')) || $this->session->userdata('status') == 'pembeli' ){ redirect('adminpanel');} 
  }

	public function index()
	{
		$data['title'] = "Dashboard";
		$this->template->load('tmpl/vbacktmpl', 'admin/v_dashboard', $data);
	}
}
