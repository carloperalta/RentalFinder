<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InvoiceModel extends CI_Model {
	private $TABLE_NAME = 'invoice';
	private $PRIMARY_KEY = 'id';

	public function getInvoices()
	{
		$query ='SELECT invoice.id,tenant.name,DATE(invoice.startdate) AS start,DATE(invoice.duedate) AS due,unit.Unit_Name AS unit,invoice.totalamount,invoice.status FROM USER AS tenant
				LEFT JOIN rent ON tenant.id = rent.tenant_id
				LEFT JOIN invoice ON rent.id = invoice.rent_id
				LEFT JOIN unit ON unit.Unit_ID = rent.unit_id WHERE MONTH(invoice.duedate) = MONTH(NOW()) AND YEAR(invoice.duedate) = YEAR(NOW())';
		return $this->db->query($query)->result();
	}
	public function getInvoice($id)
	{
		$query = 'SELECT 
				unit.Unit_Name,
				DATE(invoice.startdate) AS startdate,
				DATE(invoice.duedate) AS duedate,
				invoice.totalamount,
				invoice.status
				FROM unit 
				INNER JOIN rent ON unit.Unit_ID = rent.unit_id
				INNER JOIN invoice ON rent.id = invoice.rent_id
				WHERE rent.tenant_id = '.$id;
		return $this->db->query($query)->result();
	}

	public function getMyTenants($id)
	{
		$query = "SELECT
    			invoice.id,tenant.name,DATE(invoice.startdate) AS start,DATE(invoice.duedate) AS due,unit.Unit_Name,invoice.totalamount,invoice.status FROM USER AS tenant
				INNER JOIN rent ON tenant.id = rent.tenant_id
				INNER JOIN invoice ON rent.id = invoice.rent_id
				INNER JOIN unit ON unit.Unit_ID = rent.unit_id
				WHERE
    			unit.Owner_ID = ".$id;
		return $this->db->query($query)->result();
	}

	public function generateInvoice($rentId,$total)
	{
		$today = date('Y-m-d');
        $next_month = date("Y-m-d", strtotime("$today +1 month"));
		$generate = array(
			'startdate'=>$today,
			'duedate'=>$next_month,
			'totalamount'=>$total,
			'status'=>'PENDING',
			'rent_id'=>$rentId
		);
		$this->db->insert($this->TABLE_NAME, $generate);
	}
	

}

/* End of file InvoiceModel.php */
/* Location: ./application/models/InvoiceModel.php */