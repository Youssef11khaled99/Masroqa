<?php
require DbHandler;

$tArea = $_POST["searchtext"];
$objectType = $_POST["objectType"];
$locationItem = $_POST["li"];



echo "Hello. <br/>";

echo 'Your descripton is: '.$tArea.'<br/> Your object type is: '.$objectType.'<br/>Item
of the location is: '.$locationItem.'<br/>';





/*Conntect with database*/
DbHandler dbhandler = new DbHandler();



/*Searches in database*/
$sql = "SELECT location FROM post";//A problem here.
$result = $conn->query($sql);
echo "Result of query: ".$result."<br/>";

echo "no. of rows: ".$result->num_rows."<br/>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "photopath: " . $row["photoPath"]. " - DOL " . $row["DOL"]. " " . $row["numOfReports"]. "<br>";
    }
} else {
    echo "0 results";
    echo "'";
}





/*Show the result in an html form*/


 ?>
