<?php

	//interface declaration
	interface WebApp{
		//methods declaration
		public function login($email,$password);
		public function register($email,$password,$username);
		public function logout();
	}

	//class declaration
	class studywebApp implements WebApp{
	
		public function login($email,$password){
			echo "Login the user with email".$email."<br>";

		}
		public function register($email,$password,$username){
			echo "User registered: Email= ".$email."and Username=".$username."";
		}
		public function logout(){
			echo "User logged out";
		}

	}


	$studyobj  = new studywebApp;
	$studyobj->register('paras081@gmail.com','123','paras081');
	$studyobj->login('paras081@gmail.com','123');
	$studyobj->logout();


?>