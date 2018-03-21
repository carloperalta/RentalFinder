<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnitTypeModel extends CI_Model {
	private $PRIMARY_KEY = 'type_id';
	private $TABLE_NAME = 'unit_type';

	public function getAllUnitType()
	{
		$this->db->select('*');
		$this->db->from($this->TABLE_NAME);
		return $this->db->get()->result();
	}
	public function addModelType($value = array())
	{
		return $this->db->insert($this->TABLE_NAME, $value);
	}

	public function getUnitTypeAndNumber()
	{
		$query = "
			SELECT unit_type.type_id,unit_type.type_name, IFNULL(Subtotal.total,0)  AS Number
			FROM unit_type
			LEFT JOIN
			(SELECT unit_type, Count(unit_id) AS Total
			From unit
			Group By unit_type)Subtotal
			ON unit_type.type_name = Subtotal.unit_type";
			$SQL = $this->db->query($query);
			return $SQL->result();
	}

	public function getCount()
	{
		$this->db->select('*');
		$this->db->from($this->TABLE_NAME);
		return $this->db->get()->num_rows();
	}
	

}

/* End of file UnitTypeModel.php */
/* Location: ./application/models/UnitTypeModel.php */