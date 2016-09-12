<?php
class Base_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function retrieve_content($table='tbl_cms', $id)
	{
		$this->db->select('content');
		$this->db->from($table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	
}
?>