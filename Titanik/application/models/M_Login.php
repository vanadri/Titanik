<?php 
class M_Login extends CI_Model{
	
	public function check_email($email){
		//check if username (from param) already exist in db or not, return true / false
		return $this->db->get_where('user', ['email' => $email])->num_rows() > 0;
	}
	
	public function loginuser($data) {
		//check if data (consist of username and password) exist/found in db, return true / false
		return $this->db->get_where('user', $data)->num_rows() == 1;
	}
	
	public function insert_new_profle($data){
		//insert data (consist of username, password, and profile pic filename) to table, return true if insert works and vice versa
		return $this->db->insert('user', $data);
	}
	
	public function get_profile($email){
		//select 1 row profile based on username (from param) and return it, if the data is not found then return false
		return $this->check_email($email) ? $this->db->get_where('user', ['email' => $email])->row_array() : false;
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	function regist($data){
		return $this->db->insert('user', $data);
	}
}
?>
