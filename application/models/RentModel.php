<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentmodel extends CI_Model {

	function add(){
date_default_timezone_set('Asia/Manila');
        return $this->db->insert('rent',array(
        	'rent_date'=>date('Y-m-d h:i'),
        	'rent_type'=>$_POST['rent_type'],
        	'unit_id'=>$_POST['Unit_ID'],
        	'tenant_id'=>$_POST['tenant_id']
    	));
	}
}

/* End of file UnitModel.php */
/* Location: ./application/models/UnitModel.php */