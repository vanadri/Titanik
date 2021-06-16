<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');
  }

	public function index()
	{
		$this->template->load('tmpl/vbacktmpl', 'admin/v_dashboard');
	}
}
