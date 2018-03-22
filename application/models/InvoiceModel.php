<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InvoiceModel extends CI_Model {
	private $TABLE_NAME = 'invoice';
	private $PRIMARY_KEY = 'id';

	public function getInvoice()
	{
		$query = 'SELECT user.name,date(invoice.startdate) as start,date(invoice.duedate) as due,invoice.status,unit.Unit_Name as unit
					FROM user 
					LEFT JOIN rent ON user.id = rent.tenant_id
					LEFT JOIN unit ON rent.unit_id = unit.Unit_ID
					LEFT JOIN invoice ON invoice.rent_id = rent.id
					WHERE MONTH(invoice.duedate) = MONTH(NOW())
					AND
					YEAR(invoice.duedate) = YEAR(NOW())';
		return $this->db->query($query)->result();
	}

	public function getMyTenants($id)
	{
		$query = "SELECT invoice.id,tenant.name,date(invoice.startdate) as start,date(invoice.duedate) as due,unit.Unit_Name,invoice.totalamount,invoice.status
			FROM user as tenant
			LEFT JOIN rent ON tenant.id = rent.tenant_id
			LEFT JOIN invoice ON rent.id = invoice.rent_id
			LEFT JOIN unit ON unit.Unit_ID = rent.unit_id
			WHERE unit.Owner_ID = ". $id . " AND MONTH(invoice.duedate) = MONTH(NOW())
			AND
			YEAR(invoice.duedate) = YEAR(NOW())";
		return $this->db->query($query)->result();
	}
	

}

/* End of file InvoiceModel.php */
/* Location: ./application/models/InvoiceModel.php */