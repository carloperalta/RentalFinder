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

	
	function notif($id){
		$this->db->join('unit','unit.Unit_ID = rent.unit_id','left');
		return $query=$this->db->get_where('rent',array('tenant_id'=>$id))->result_array();
	}
}

/* End of file UnitModel.php */
/* Location: ./application/models/UnitModel.php */