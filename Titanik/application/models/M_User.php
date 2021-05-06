<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

    // Fungsi untuk mengakses database
	public function __construct() {
		$this->load->database();
	}

    // Fungsi untuk mengambil input untuk dibuatkan data ke dalam database
	function createData() {
		$data = array (
			'email' => $this->input->post('email'),
			'firstName' => $this->input->post('firstName'),
			'lastName' => $this->input->post('lastName'),
			'password' => $this->input->post('password')
		);
		$this->db->insert('profile', $data);
	}

    // Fungsi untuk mengambil seluruh data
	function getAllData() {
		$query = $this->db->query('SELECT * FROM profile');
		return $query->result();
	}

    // Fungsi untuk mengambil data berdasarkan id
	function getData($id) {
        $query = $this->db->query('SELECT * FROM profile WHERE `id` =' .$id);
        return $query->row();
    }

    // Fungsi untuk melakukan update data
    function updateData($id) {
        $data = array (
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'password' => $this->input->post('password')
        );
        $this->db->where('id', $id);
        $this->db->update('profile', $data);
    }

    // Fungsi untuk menghapus data
    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('profile');
    }
}
