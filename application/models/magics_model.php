<?php 

class Magics_model extends CI_Model {



	public function get_all_magics() 
	{
		$q = $this->db->get('magics');
		$q_result = $q->result_array();
		return $q_result;

	}//end of get_all_magics

	//to fetch selectes magic record
	public function show_magic_id($data)
	{
		$this->db->select('*');
		$this->db->from('magics');
		$this->db->where('id', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}


	public function get_single_magic($magic_id) 
	{
		$this->db->where('id', $magic_id);
		$q = $this->db->get('magics');
		
		return $q->row_array();

	}//end of get_single_magic

	public function add_magic()
	{
		$magic = array (

			'magic' => $this->input->post('magic'),
			'words' => $this->input->post('words')
			);
		
		return $this->db->insert('magics', $magic);
	}//end add_magic

	public function update_m()
	{

		$this->magic    = $_POST['magic'];
		$this->words  = $_POST['words'];
		$this->id 		= $_POST['id'];

		$this->db->update('magics', $this, array('id' => $_POST['id']));
		
	}//end of update_magic


}


?>