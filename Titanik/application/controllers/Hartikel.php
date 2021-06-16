<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hartikel extends CI_Controller {

	
   
	public function __construct(){
		parent::__construct();
		// load Pagination library
		$this->load->library('pagination');
		// load URL helper
		$this->load->helper('url');
      $this->load->model('m_artikel', 'model');
  }

	public function index()
	{
      $data['list'] = $this->model->get();
      $data['list_cnt'] = count($this->model->get());
		$this->template->load('tmpl/front/vfronttmpl', 'front/vartikel_list', $data);
	}

	function detail(){
		$id = $this->uri->segment(3);
		$datas =  $this->model->get($id);
		$data['rows'] = $datas;
		$this->template->load('tmpl/front/vfronttmpl', 'front/vartikel_detail', $data);
	}
}
