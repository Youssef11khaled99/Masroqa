<?php  
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "date " . $row["date"]. " - description: " . $row["description"]. "<br>";
    }
} else {
    echo "0 results";
}
?>