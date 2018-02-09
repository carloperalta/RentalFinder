<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TenantModel extends CI_Model {

	public $TABLE_NAME = 'tenant';
	public $PRIMARY_KEY = 'Tenant_ID';

	public function getAllTenant()
	{
		$this->db->select("*");
		$this->db->from($this->TABLE_NAME);

		return $this->db->get()->result();
	}

	public function getTenant($id)
	{
		$this->db->select("*");
		$this->db->from($this->TABLE_NAME);
		$this->db->where($this->PRIMARY_KEY, $id);

		return $this->db->get()->result();
	}

	public function insertTenant($data=array())
	{
		$this->db->insert($this->TABLE_NAME, $data);
		return $this->db->insert_id();
	}

	public function deleteTenant($id)
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

/* End of file TenantModel.php */
/* Location: ./application/models/TenantModel.php */