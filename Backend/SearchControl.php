<?php
$tArea = $_POST["searchtext"];
$objectType = $_POST["objectType"];
$locationItem = $_POST["li"];





echo 'Your descripton is: '.$tArea.'<br/> Your object type is: '.$objectType.'<br/>Item
of the location is: '.$locationItem.'<br/>';





/*Conntect with database*/

$servername = "localhost";
$username = "nerdo";
$password = "22963490nerdoO@";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



/*Searches in database*/






/*Show the result in an html form*/


 ?>
