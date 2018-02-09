<?php 
	/**
	* 
	*/
	class Unit
	{
		
		$Unit_ID ;
		$Unit_Lat ;
		$Unit_Long;
		$Unit_Type;
		$Unit_Price;
		$Owner_ID;


		function __construct($Unit_ID,$Unit_Lat,$Unit_Long,$Unit_Type,$Unit_Price,$Owner_ID)
		{
			$this->Unit_ID = $Unit_ID;
			$this->Unit_Lat = $Unit_Lat;
			$this->Unit_Long = $Unit_Long;
			$this->Unit_Price = $Unit_Price;
			$this->Owner_ID = $Owner_ID;
		}

		public function getUnit_ID(){return $this->Unit_ID;}
		public function setUnit_ID($id){$this->Unit_ID = $id;}
		public function getUnit_Lat(){return $this->Unit_Lat;}
		public function setUnit_Lat($Unit_Lat){	$this->Unit_Lat = $Unit_Lat;}
		public function getUnit_Long(){	return $this->Unit_Long;}
		public function setUnit_Long($Unit_Long){$this->Unit_Long = $Unit_Long;}
		public function getUnit_Price(){return $this->Unit_Price;}
		public function setUnit_Price($Unit_Price){	$this->Unit_Price = $Unit_Price;}
		public function getOwner_ID(){return $this->Owner_ID;}
		public function setOwner_ID($Owner_ID){$this->Owner_ID = $Owner_ID;}


	}


 ?>
