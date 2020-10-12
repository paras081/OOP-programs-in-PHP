<?php

	class prt
	{

		public $no1=100;
		public $no2=200;
		public $add;
		public static stcvar =20;

		public function addition(){
			$this->add = $this->no1 + $this->no2;
			echo "addition = ".$this->add;
		}
	}

	class chl extends prt
	{
		public $no3 = 50;
	}

	class chl2 extends chl
	{
		
	}


	$objclh2 = new chl2;

	echo $objclh2->no1;


	$obj1 = new prt;
	$obj2 = new prt;
	$obj3 = new prt;
?>