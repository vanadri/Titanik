<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent::__construct();
		$this->load->model('M_Login');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('Home');
	}

	public function serviks() {
		$this->load->view('users/header');
		$this->load->view('users/artikelkankerserviks');
	}

	public function hati() {
		$this->load->view('users/header');
		$this->load->view('users/artikelkankerhati');
	}
	public function payudara() {
		$this->load->view('users/header');
		$this->load->view('users/artikelkankerpayudara');
	}
	public function paru() {
		$this->load->view('users/header');
		$this->load->view('users/artikelkankerparu');
	}
	public function lambung() {
		$this->load->view('users/header');
		$this->load->view('users/artikelkankerlambung');
	}
	public function TanyaTangker() {
		$this->load->view('users/header');
		$this->load->view('users/tanyasitangker');
	}
	public function createTanya() {
		$this->load->model("M_TanyaTangker");
		$this->M_TanyaTangker->createData();
		redirect("index.php/welcome/TanyaTangker");
	}
	public function tips() {
		$this->load->view('users/header');
		$this->load->view('users/tipspage');
	}
	public function rumahsakit() {
		$this->load->model('M_RumahSakit');
		$data['result'] = $this->M_RumahSakit->getAllData();
		$this->load->view('users/header');
		$this->load->view('users/listrumahsakit', $data);
	}

	public function Login() {
		$message="Invalid email or password";
		if ($this->input->method() == 'post') {
			$data = ['email' => $this->input->post('email'), 'password' => $this->input->post('password')];
			if ($this->M_Login->loginuser($data)) {
				$this->session->set_userdata('email', $data['email']);
                redirect("index.php/C_User");
            } else {
                $this->load->view('Home');

            }
		}else{
			$this->load->view('Home');
		}
		
	}

	public function Register() {
	$this->form_validation->set_rules('firstName','firstName','trim|required|min_length[4]');
	$this->form_validation->set_rules('lastName','lastName','trim|required|min_length[4]');
	$this->form_validation->set_rules('email', 'Email','trim|required|valid_email');
	$this->form_validation->set_rules('password','Password','trim|required|matches[passconf]');
	$this->form_validation->set_rules('passconf','Password','trim|required|matches[password]');
		if($this->form_validation->run() == false){
			echo "data gagal dibuat!";
			// $this->load->view('users/header');
			// $this->load->view('users/home');
		}else{
			$data = array (
			'id' => rand(10000, 99999),
			'firstName' => $this->input->post('firstName'),
			'lastName' => $this->input->post('lastName'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
				);
			//print_r($data);
			$this->M_Login->regist($data);
			redirect(base_url());
			// echo "data berhasil dibuat!";
		}

	}
}
