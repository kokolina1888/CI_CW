<?php 

class Dlops_model extends CI_Model {

	public function get_all_dlops() 
	{
		$q = $this->db->get('dlops');
		return $q->result_array();

	}

	public function add_dlop()
	{
		$dlop = array (

//както са в базата
			)
		return $this->db->insert('dlops', $dlop);
	}
}


?>