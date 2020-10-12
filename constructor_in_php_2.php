<?php

	
	class myclass
	{
		public $rollnum;
		//constructor is a function which gets called authomatically when object of that class had been created
		public function __construct($name,$varvalue)
		{

			$this->rollnum = $varvalue;  //property initialize
			$this->myname($name);	     //default function call 
		}

		public function myname($name)
		{
			echo "my name is =".$name."<br/>";
			echo "roll num = ".$this->rollnum;
		}

		
	}//class definition complete

	$myclassObj = new myclass("paras",1);

?>