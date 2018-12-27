<?php 
	session_start(); 
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Masroqa</title>
  <!-- this is the main file don't edit now edit html pages only!!-->
</head>
<body>
	<h1>Homepage</h1>
	<?php
		if (isset($_SESSION['username'])) {
	  ?>
	  	<a href= "html/post.html">Create post</a>
		<a href= "Backend/personalProfile.php"><?php echo $_SESSION['username'] ?></a>
	<?php }
		else{
	?>
		<a href= "Backend/login.php">Login</a>
		<a href= "Backend/signup.php">Signup</a>
	<?php }?>
</body>
</html>