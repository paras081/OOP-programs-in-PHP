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
		public $no3 = 50;
	}

	class chl2 extends prt
	{
		public $no4 = 100;
	}


	$objchl = new chl;  //child class obj

	echo "<br/>".$objchl->no2;


	$objchl2 = new chl2;  //child class obj

	echo "<br/>".$objchl2->no4;




?>