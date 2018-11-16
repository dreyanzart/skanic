<?php
class M_search extends CI_Model{

	function search_guru($search){
		$this->db->like('nama', $search , 'both');
		$this->db->order_by('nama', 'ASC');
		$this->db->limit(10);
		return $this->db->get('guru')->result();
	}
	
	function search_matpel($search2){
		$this->db->like('matpel', $search2 , 'both');
		$this->db->order_by('matpel', 'ASC');
		$this->db->limit(10);
		return $this->db->get('matpel')->result();
	}

}
?>