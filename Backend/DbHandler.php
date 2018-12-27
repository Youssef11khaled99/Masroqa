<?php
/**
 * A datbase handler to enhance code readability and reusability.
 */
class DbHandler
{
    
   $serverne="localhost"; 
   $username="root"; 
   $password="12345678";
   $conn;//Connection string
   $sql;
   $result;//Query and its result
   function setServerName($sn)
   {
     $servername = $sn;
   }

  function setQuery($q)
  {
    $sql = $q;
    $result = $conn->query($sql);

  }

  function __construct()
  {
    // code...
  }
  function connect()
  {
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
  }
  function disconnect()
  {
     $conn->close();
  }

  function select()
  {

  }
  function insert()
  {
    if ($result === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  }
  function update()
  {

  }
  function delete()
  {

  }



}
 ?>
