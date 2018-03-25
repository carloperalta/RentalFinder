<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentmodel extends CI_Model {

	function add($unit_id,$tenant_id,$date){
		$insertThis = array(
			'rent_date'=>$date,
			'rent_type'=> 'MONTHLY',
			'unit_id' => $unit_id,
			'tenant_id'=> $tenant_id
		);
         $this->db->insert('rent',$insertThis);
         return $this->db->insert_id();
	}
	public function getAllForRent()
	{
		$query = "SELECT unit.unit_id,unit.Unit_Name,unit.Unit_Description,unit.Unit_Amenities,unit.Unit_Houserules,unit.Unit_Capacity,COUNT(rent.id) AS Rents 
			FROM rent 
			INNER JOIN unit ON 
			unit.Unit_ID = rent.unit_id
			GROUP BY unit_id
			";
		print_r($this->db->query($query)->result());
	}

	
	function notif($id){
		$this->db->join('unit','unit.Unit_ID = rent.unit_id','left');
		return $query=$this->db->get_where('rent',array('tenant_id'=>$id))->result_array();
	}
}

/* End of file UnitModel.php */
/* Location: ./application/models/UnitModel.php */