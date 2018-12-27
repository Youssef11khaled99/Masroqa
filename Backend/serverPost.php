<?php

    $db = mysqli_connect('localhost', 'root', '12345678', 'masrooqa');
    $location = "";
    $date = "";
    $description = "";
    $photoPath = "";
    $type = "";
    $errors = array();
    
    
    //if post button is clicked
    if (isset($_POST['submit']))
    {
        $date = $_POST['fdate'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $photoPath = $_POST['photoPath'];
        $type = $_POST['type'];

        //make sure that the data is fulfilled correctly
        if(empty($date))
        {
            array_push($errors, "Date is required!");
        }
        if(empty($location))
        {
            array_push($errors, "Location is required!");
        }
        if(empty($description))
        {
            array_push($errors, "Description is required!");
        }
        if(empty($photoPath))
        {
            array_push($errors, "PhotoPath is required!");
        }
        if(!file_exists($photoPath))
        {
            array_push($errors, "PhotoPath is not correct!");
        }
        if(empty($type))
        {
            array_push($errors, "Type is required!");
        }

        if(count($errors) == 0)
        {
            $query = "INSERT INTO posts (date, location, description, photoPath, type) 
                                VALUES ('$date', '$location', '$description', '$photoPath', '$type')";
            mysqli_query($db, $query);

            header("location: ../html/Home.html");
        }


    }
    $db->close();
?>