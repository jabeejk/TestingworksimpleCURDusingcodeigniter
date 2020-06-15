<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class db_model extends CI_Model {

	public function ins_value($value)
	{
		
		$result = $this->db->insert('detailss',$value);
		return $result;
	}

	public function view_info()
	{
		$result = $this->db->get('detailss')->result_array();
		return $result;
	}

	public function edit_info($value)
	{
		$this->db->where('id',$value);
		$result = $this->db->get('detailss')->row_array();
		return $result;
	}

	public function up($data,$id)
	{
		$this->db->where('id',$id);
		$result = $this->db->update('detailss',$data);
		return $result;
	}

	
}
