<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	function createData() {
		$data = array (
			'email' => $this->input->post('email'),
			'firstName' => $this->input->post('firstName'),
			'lastName' => $this->input->post('lastName'),
			'password' => $this->input->post('password')
		);
		$this->db->insert('profile', $data);
	}

	function getAllData() {
		$query = $this->db->query('SELECT * FROM profile');
		return $query->result();
	}

	function getData($id) {
        $query = $this->db->query('SELECT * FROM profile WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'password' => $this->input->post('password')
        );
        $this->db->where('id', $id);
        $this->db->update('profile', $data);
    }

    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('profile');
    }
}