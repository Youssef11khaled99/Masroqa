<?php 
    // get values passed from index.html form
    $useremail = $_POST["email"];
    $password = $_POST["password"];
    
    // connect to the server and select database
    $con=mysql_connect("localhost","root","12345678");
    mysql_select_db("login");
    //Query the database for user
    $result = mysql_query("select * from users where useremail = '$useremail' and password = '$password' ")
            or die ("Failed to query database".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['useremail'] == $useremail && $row['password'] == $password) {
        echo "Login success!!! Welcome ".$row['useremail'];
    } else {
        echo "Failed to Login!";
    }
    
    mysql_close($con);
?>