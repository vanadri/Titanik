<?php 
class M_Login extends CI_Model{
	
	public function check_email($email){
		// Melakukan pengecekan apabila username telah berada di dalam database atau belum, dengan return true / false
		return $this->db->get_where('user', ['email' => $email])->num_rows() > 0;
	}
	
	public function loginuser($data) {
		// Melakukan pengecekan apabila data telah berada di dalam database atau belum, dengan return true / false
		return $this->db->get_where('user', $data)->num_rows() == 1;
	}
	
	public function insert_new_profle($data){
		// Menginput data profil baru ke dalam tabel, return true jika berhasil, false jika gagal
		return $this->db->insert('user', $data);
	}
	
	public function get_profile($email){
		// Memilih satu baris profil berdasarkan username dan menampilkannya, jika data tidak ditemukan maka return false
		return $this->check_email($email) ? $this->db->get_where('user', ['email' => $email])->row_array() : false;
	}

	function cek_login($table,$where){		
		// Melakukan pengecekan apabila sudah melakukan login
		return $this->db->get_where($table,$where);
	}	
	
	function regist($data){
		// Melakukan pengecekan apabila sudah melakukan register
		return $this->db->insert('user', $data);
	}
}
?>
