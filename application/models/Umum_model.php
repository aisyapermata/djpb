<?php
class Umum_model extends CI_Model{
	//membuat fungsi
	function take($idJenis){
		$this->db->select('*, u.keterangan as isi');
		$this->db->from('t_umum as u');
		$this->db->join('ref_umum as ru','ru.jenis=u.jenis');
		$this->db->join('ref_status as rs','rs.status=u.status');
		$this->db->join('ref_group as rg','rg.group=u.kdgroup');
		$this->db->join('ref_kppn_jatim as rkj','rkj.kdkppn=u.kdkppn');
		$this->db->join('t_useropr as rus','rus.useropr=u.useropr');
		$this->db->where('u.jenis='.$idJenis);
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

	// function data_kppn(){
	// 	$data=array();
	// 	$query=$this->db->get('ref_kppn_jatim');
	// 	if ($query->num_rows()>0) {
	// 		foreach ($query->result_array() as $row) {
	// 			$data[]=$row;;
	// 		}
	// 	}
	// 	$query->free_result();
	// 	return $data;
	// }
}

?>