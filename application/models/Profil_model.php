<?php

class Profil_model extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function get($id)
	{
		$this->db->select('
			t_useropr.id,
			t_useropr.useropr,
			t_useropr.nmopr,
			t_useropr.email,
			t_useropr.nohp');
		$this->db->from('t_useropr');
		$this->db->where('t_useropr.id', $id);

		$query = $this->db->get();
		return $query->row();
	}

	public function update($id,$username,$nama,$email,$nohp)
	{
		$this->db->set('useropr', $username);
		$this->db->set('nmopr', $nama);
		$this->db->set('email', $email);
		$this->db->set('nohp', $nohp);
		$this->db->where('id', $id);
		$this->db->update('t_useropr');
	}
}
