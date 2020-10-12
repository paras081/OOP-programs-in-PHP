<?php

	
	class mybank
	{
		//access specifier  pub,private,protected
		//properties
		public $balance =100;

		//methods
	 	public function display()
		{
			return "Balance is".$this->balance."<br/>";
		}
		public function withdraw($am)
		{
			$this->balance = $this->balance -$am;
		}
		public function deposite($dep)
		{
			$this->balance = $this->balance + $dep;
		}
	}//class definition is over

	//create an object of class
	$obj= new mybank;

	//this is by defualte balance
	echo $obj->display(  );

	$obj->withdraw(10);
	//this is balance after withdraw
	echo $obj->display();

	$obj->deposite(20);

	echo $obj->display();


	$obj2 = new mybank();

	echo $obj2->display();	//balance =100
?>