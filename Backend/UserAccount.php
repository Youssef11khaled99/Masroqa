<?php	
	class UserAccount{
		private $userName;
		private $emailAddress;
		private $description;
		private $password;
		
		public function login(){
			$errors = array();
			if (isset($_POST['submit'])){
					// get values passed from index.html form
					$useremail = $_POST["email"];
					$password = $_POST["password"];
					// connect to the server and select database
					$con=mysql_connect("localhost","root","12345678");
					mysql_select_db("masrooqa");

					//Query the database for user
					$result = mysql_query("select * from login where useremail = '$useremail' and password = '$password' ")
									or die ("Failed to query database".mysql_error());

					$row = mysql_fetch_array($result);
					if ($row['useremail'] == $useremail && $row['password'] == $password) {
							header("Location: ../html/Home.html");
							echo "Login success!!! Welcome ".$row['useremail'];
					} else if ($row['useremail'] !== $useremail || $row['password'] !== $password){
							array_push($errors, "Your email or password is not correct");
					} 
					
					mysql_close($con);
				}
			return $errors;
		}
		public function signUp(){
				session_start();
				$userName = "";
				$emailAddress = "";
				$errors = array(); 
				// connect to the database
				$con = mysql_connect("localhost","root","12345678");
				mysql_select_db("masrooqa");
				// REGISTER USER
				if (isset($_POST['reg_user'])) {
				  // receive all input values from the form
				  $userName = $_POST['username'];
				  $emailAddress = $_POST['email'];
				  $password_1 = $_POST['password_1'];
				  $password_2 = $_POST['password_2'];
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
					$result = mysql_query("SELECT * FROM user WHERE username='$userName' OR email='$emailAddress' LIMIT 1")
									or die ("Failed to query database".mysql_error());


				  
					if ($result) { // if user exists
						$row = mysql_fetch_array($result);						
				    if ($row['username'] === $userName) {
				      array_push($errors, "username already exists");
				    }
				    if ($row['email'] === $emailAddress) {
				      array_push($errors, "email already exists");
				    }
				  }
				  // Finally, register user if there are no errors in the form
				  if (count($errors) == 0) {
				  	$password = md5($password_1);//encrypt the password before saving in the database

				  	$query = mysql_query("INSERT INTO login (username, email, password) 
				  			  VALUES('$userName', '$emailAddress', '$password')");
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