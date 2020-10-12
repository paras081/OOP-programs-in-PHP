<?php

	//decalaration of interface
	interface myfirstinterface {
		public function getName();
		public function getAge();
	}

	//defination of class
	class MyClass implements  myfirstinterface{

		public function getName()
		{
				echo "my name is paras kalariya"."<br>";
		}
		public function getAge()
		{
				echo "my age is 31";
		}
	}

	class MyClass2 implements  myfirstinterface{

		public function getName()
		{
				echo "my first name is paras"."<br>";
				echo "my last name is kalariya"."<br>";
		}
		public function getAge()
		{
				echo "my age is 31";
		}

		public function original(){
			echo 'this is original method of class2';
		}
	}


	$obj = new MyClass;

	$obj->getName();
	$obj->getAge();

	$obj2 = new MyClass2;

	$obj2->getName();
	$obj2->getAge();

?>