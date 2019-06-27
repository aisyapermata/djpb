<?php

class Admin_model extends CI_Model{
	//membuat fungsi
	function take(){
		$this->db->select('*');
		$this->db->from('t_admin');
		$this->db->join('ref_status','ref_status.status=t_admin.status');
		$query=$this->db->get();

		return $query;
	}

	function input($data, $tabel){
		$this->db->insert($tabel, $data);
	}

	function delete($where, $tabel){
		$this->db->where($where);
		$this->db->delete($tabel);
	}

	function edit($where,$tabel){
		return $this->db->get_where($tabel, $where);
	}

	function search($where,$tabel){
		return $this->db->get_where($tabel, $where);
	}

	function update($where,$data,$tabel){
		$this->db->where($where);
		$this->db->update($tabel,$data);
	}

	function status(){
		$data=array();
		$query=$this->db->get('ref_status');

		if ($query->num_rows()>0) {
			foreach ($query->result_array() as $row) {
				$data[]=$row;;
			}
		}
		$query->free_result();
		return $data;
	}


}

?>