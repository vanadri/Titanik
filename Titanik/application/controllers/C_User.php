<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') != "admin"){
			redirect(base_url());
		}
		$this->load->model('M_User');
	}

	public function index() {
		$data['result'] = $this->M_User->getAllData();
		$this->load->view('crud/users/V_User', $data);
	}

	public function create() {
		$this->M_User->createData();
		redirect("index.php/C_User");
	}

	public function edit($id) {
		$data['row'] = $this->M_User->getData($id);
		$this->load->view('crud/users/V_UserEdit', $data);
	}

	public function update($id) {
        $this->M_User->updateData($id);
        redirect("index.php/C_User");
    }

    public function delete($id) {
    	$this->M_User->deleteData($id);
    	redirect("index.php/C_User");
    }


	
}
