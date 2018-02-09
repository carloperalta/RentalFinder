<?php 

	class Tenant
	{

		$Tenant_ID;
    	$Tenant_FN;
    	$Tenant_MI;
	   	$Tenant_LN;
	    $Tenant_EMAIL; 
   		$Tenant_CN;
   		$Tenant_BirthDate;  
		
		function __construct($Tenant_ID ,$Tenant_FN,$Tenant_MI,$Tenant_LN,$Tenant_EMAIL ,$Tenant_CN,$Tenant_BirthDate )
		{
			$this->Tenant_ID = $Tenant_ID;
		    $this->Tenant_FN = $Tenant_FN;
		    $this->Tenant_MI = $Tenant_MI;
		    $this->Tenant_LN = $Tenant_LN;
		    $this->Tenant_EMAIL = $Tenant_EMAIL;
		    $this->Tenant_CN = $Tenant_CN;
		    $this->Tenant_BirthDate = $Tenant_BirthDate; 
		}

		public function getTenant_ID(){return $this->Tenant_ID;}
		public function setTenant_ID($Tenant_ID){$this->Tenant_ID = $Tenant_ID;}
		public function getTenant_FN(){return $this->Tenant_FN;}
		public function setTenant_FN($Tenant_FN){$this->Tenant_FN = $Tenant_FN;}
		public function getTenant_MI(){return $this->Tenant_MI;}
		public function setTenant_MI($Tenant_MI){$this->Tenant_MI = $Tenant_MI;}
		public function getTenant_LN(){return $this->Tenant_LN;}
		public function setTenant_LN($Tenant_LN){$this->Tenant_LN = $Tenant_LN;}
		public function getTenant_EMAIL(){return $this->Tenant_EMAIL;}
		public function setTenant_EMAIL($Tenant_EMAIL){$this->Tenant_EMAIL = $Tenant_EMAIL;}
		public function getTenant_CN(){return $this->Tenant_CN;}
		public function setTenant_CN($Tenant_CN){$this->Tenant_CN = $Tenant_CN;}
		public function getTenant_BirthDate(){return $this->Tenant_BirthDate;}
		public function setTenant_BirthDate($Tenant_BirthDate){$this->Tenant_BirthDate = $Tenant_BirthDate;}


	}
 ?>