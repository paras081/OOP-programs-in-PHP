<?php

	//interface declaration
	interface WebApp{
		//methods declaration
		public function login($email,$password);
		public function register($email,$password,$username);
		public function logout();
	}

	interface cms{
		public function publisPost($post);
	}

	//class declaration
	class studywebApp implements WebApp, cms{
	
		public function login($email,$password){
			echo "Login the user with email".$email."<br>";

		}
		public function register($email,$password,$username){
			echo "User registered: Email= ".$email."and Username=".$username."";
		}
		public function logout(){
			echo "User logged out"."<br>";
		}

		public function publisPost($post){
			echo $post."<br>";
		}
	}


	$studyobj  = new studywebApp;
	$studyobj->register('paras081@gmail.com','123','paras081');
	$studyobj->login('paras081@gmail.com','123');
	$studyobj->logout();
	$studyobj->publisPost('hey there ! now i can publish the post');

?>