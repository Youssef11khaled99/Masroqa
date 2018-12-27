<?php
$tArea = $_POST["searchtext"];
$objectType = $_POST["objectType"];
$locationItem = $_POST["li"];


echo '
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
            <link rel="stylesheet" href="../css/styles.css">
            <link rel="stylesheet" href="../css/search_result.css">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
                <div class="cont">
                        <div class="demo">
                        <div class="login" action="login.php" method="POST">
                        <div class="login__check"> </div>
                        <div class="login__row">
                            <button type="button" class="login__submit" onclick="location.href = '."'../html/Home.html'".';"> Home</button>
                        </div>
                            <div class="login__form">
                            <div class="login__row">
                                <p class="search_result"> Your descripton is: '.$tArea.'</p>
                            </div>
                            <div class="login__row">
                                <p class="search_result"> Your object type is: '.$objectType.'</p>
                            </div>
                            <div class="login__row">
                                <p class="search_result"> Item
                                of the location is: '.$locationItem.'</p>
                            </div>';

/*Searches in database*/

$conn = mysqli_connect('localhost', 'root', '12345678','masrooqa');

$sql = "SELECT * FROM posts WHERE type='$objectType' and location='$locationItem'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="login__row">
                    <p class="search_result"> date: '.$row["date"].'</p>
                    </div>
                <div class="login__row">
                    <p class="search_result"> description: '.$row["description"].'</p>
                </div>';
            }
            echo '
                
            </div>
            </div>
                          
                      
        </body>
        </html>';

} else {
    echo "0 results";
}






/*Show the result in an html form*/






mysqli_close($conn);

 ?>
