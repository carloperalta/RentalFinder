<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OwnerModel extends CI_Model {
	public $TABLE_NAME='owner';
	public $PRIMARY_KEY='Owner_ID';
	

	public function getAllOwner()
	{
		$this->db->select('*');
		$this->db->from($this->TABLE_NAME);

		return $this->db->get()->result();

	}

	public function getOwner($id)
	{
			$this->db->select('*');
			$this->db->from($this->TABLE_NAME);
			$this->db->where($this->PRIMARY_KEY, $id);

			return $this->db->get()->row();
	}

	public function insertOwner($data=array())
	{
		$this->db->insert($this->TABLE_NAME, $data);
		return $this->db->insert_id();
	}

	public function deleteOwner($id)
	{
		$this->db->where($this->PRIMARY_KEY, $id);
		$this->db->delete($this->TABLE_NAME);
		return TRUE;
	}

	public function updateOwner($id)
	{
		$this->db->where($this->PRIMARY_KEY, $id);
		$this->db->update($this->TABLE_NAME, $data);
		if ($this->db->affected_rows()) {
			return TRUE;
		}

	}
}

/* End of file OwnerModel.php */
/* Location: ./application/models/OwnerModel.php */
































































