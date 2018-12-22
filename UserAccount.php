<?php
	class UserAccount{
		private $userName;
		private $emailAddress;
		private $description;
		private $password;
		function __construct($userName,$emailAddress,$description,$password){
			$this->$userName = $userName;
			$this->$emailAddress = $emailAddress;
			$this->$description = $description ;
			$this->$password = $password;
		}
		public function login(){

		}
		public function signUp(){
			
		}
		public function editInfo(){

		}
		public function signOut(){

		}

	}
?>