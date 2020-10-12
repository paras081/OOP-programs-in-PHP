<?php

	class prt
	{

		public $no1=100;
		public $no2=200;
		public $add;

		public function addition(){
			$this->add = $this->no1 + $this->no2;
			echo "addition = ".$this->add;
		}
	}

	class chl extends prt
	{
		public $name = "Raj";
	}

	$objchl = new chl;  //child class obj

	$objchl->addition();

	echo "<br/>".$objchl->name;


?>