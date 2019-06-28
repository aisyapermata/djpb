<?php

class Autentikasi_model extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function cek_autentikasi_adm($nip,$password)
	{
		$result = array();
		$result_user = false;

		$this->db->select('*');
		$this->db->from('t_admin');
		$this->db->where('nip', $nip);
		$this->db->where('passw', $password);

		$query = $this->db->get();

		if($query->num_rows() > 0) {
			$result["data_user"] = $query->row();
			$result["valid_user"] = true;
		}
		else {
			$result["data_user"] = $query->row();
			$result["valid_user"] = false;
		}
		return $result;
	}

	public function cek_autentikasi_opr($nip,$password)
	{
		$result = array();
		$result_user = false;

		$this->db->select('*');
		$this->db->from('t_useropr');
		$this->db->where('useropr', $nip);
		$this->db->where('passw', $password);

		$query = $this->db->get();

		if($query->num_rows() > 0) {
			$result["data_user"] = $query->row();
			$result["valid_user"] = true;
		}
		else {
			$result["data_user"] = $query->row();
			$result["valid_user"] = false;
		}
		return $result;
	}

	public function update_password($nip,$password) 
	{
		$this->db->set('passw', $password);
		$this->db->where('nip', $nip);
		$this->db->update('t_admin');
	
	}
}