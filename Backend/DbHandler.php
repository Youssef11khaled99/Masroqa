<?php
/**
 * A datbase handler to enhance code readability and reusability.
 */
class DbHandler
{
  var $servername, $username, $password;
  var $conn;//Connection string
  var $sql, $result;//Query and its result

  function setQuery($q)
  {
    $sql = $q;
    $result = $conn->query($sql);

  }

  function __construct($s, $u, $p)
  {
    // code...
    $servername = $s;
    $username = $u;
    $password = $p;
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

  }
  function update()
  {

  }
  function delete()
  {

  }

}



 ?>
