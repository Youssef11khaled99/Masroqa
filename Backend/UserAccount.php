<?php	
	class UserAccount{
		private $userName;
		private $emailAddress;
		private $description;
		private $password;
		
		public function login(){
		}
		public function signUp(){
				session_start();
				$userName = "";
				$emailAddress = "";
				$errors = array(); 
				// connect to the database
				$db = mysqli_connect('localhost', 'root', '', 'masroqa');
				// REGISTER USER
				if (isset($_POST['reg_user'])) {
				  // receive all input values from the form
				  $userName = mysqli_real_escape_string($db, $_POST['username']);
				  $emailAddress = mysqli_real_escape_string($db, $_POST['email']);
				  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
				  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
				  // form validation: ensure that the form is correctly filled ...
				  // by adding (array_push()) corresponding error unto $errors array
				  if (empty($userName)) { array_push($errors, "username is required"); }
				  if (empty($emailAddress)) { array_push($errors, "email is required"); }
				  if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
  						array_push($errors, "Invalid email format"); 
					}
				  if (empty($password_1)) { array_push($errors, "Password is required"); }
				  if ($password_1 != $password_2) {
					array_push($errors, "The two passwords do not match");
				  }
				  // first check the database to make sure 
				  // a user does not already exist with the same userName and/or emailAddress
				  $user_check_query =  "SELECT * FROM user WHERE username='$userName' OR email='$emailAddress' LIMIT 1";
				  $result = mysqli_query($db, $user_check_query);
				  $user = mysqli_fetch_assoc($result);
				  if ($user) { // if user exists
				    if ($user['username'] === $userName) {
				      array_push($errors, "username already exists");
				    }
				    if ($user['email'] === $emailAddress) {
				      array_push($errors, "email already exists");
				    }
				  }
				  // Finally, register user if there are no errors in the form
				  if (count($errors) == 0) {
				  	$password = md5($password_1);//encrypt the password before saving in the database

				  	$query = "INSERT INTO user (username, email, password) 
				  			  VALUES('$userName', '$emailAddress', '$password')";
				  	mysqli_query($db, $query);
				  	$_SESSION['username'] = $userName;
				  	$_SESSION['success'] = "You are now logged in";
				  	header('location: ../index.php');
				  }
				}
				return $errors;
		}
		public function editInfo(){
		}
		public function signOut(){
		}
	}
?>