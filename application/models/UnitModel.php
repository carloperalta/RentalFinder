<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnitModel extends CI_Model {

	public $PRIMARY_KEY = 'Unit_ID';
	public $TABLE_NAME = 'unit';
	public $OWNER_ID ='Owner_ID';

	public function getAllUnit()
	{
		$this->db->select("*");
		$this->db->from($this->TABLE_NAME);
		$this->db->order_by($this->Owner_ID, 'asc');

		return $this->db->get()->result();
	}

	public function getUnitByOwner($id)
	{
		$this->db->select("*");
		$this->db->from($this->TABLE_NAME);
		$this->db->where($this->OWNER_ID, $id);

		return $this->db->get()->result();
	}
	public function getPropertiesById($id)
	{
		$this->db->select('*');
		$this->db->from($this->TABLE_NAME);
		$this->db->where('Owner_ID', $id);
		return $this->db->get()->result();
	}
	public function getPropertiesByType($type)
	{
		$this->db->select('*');
		$this->db->from($this->TABLE_NAME);
		$this->db->where('Unit_Type', $type);
		return $this->db->get()->result();
	}

	public function insertUnit($data=array())
	{
		$this->db->insert($this->TABLE_NAME, $data);
		return $this->db->insert_id();
	}

	public function deleteUnit($id)
	{
		$this->db->where($this->PRIMARY_KEY, $id);
		$this->db->delete($this->TABLE_NAME);
	}

	public function updateUnit($id)
		{

			$this->db->where($this->PRIMARY_KEY, $id);
			$this->db->update($this->TABLE_NAME, $data);
			if ($this->db->affected_rows()) {
				return TRUE;
			}
		}
}

/* End of file UnitModel.php */
/* Location: ./application/models/UnitModel.php */