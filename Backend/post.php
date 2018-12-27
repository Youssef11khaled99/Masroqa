<?php include('serverPost.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Post for a lost object</title>
    <link rel="stylesheet" type="text/css" href="../css/postStyle.css">
</head>

<body>
    <div class="header">
        <h2>Post</h2>
    </div>

    <form method="POST" action="post.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Date</label>
            <input type="date" name="fdate" value= "<?php echo $date; ?>">
        </div>
        <div class="input-group">
                <label>Location</label>
                <input type="text" name="location" value= "<?php echo $location; ?>">
        </div>
        <div class="input-group">
                <label>Description</label>
                <input type="text" name="description" value= "<?php echo $description; ?>">
        </div>
        <div class="input-group">
                <label>PhotoPath</label>
                <input type="text" name="photoPath" value= "<?php echo $photoPath; ?>">
        </div>
        <div class="input-group">
                <label>Type: (device, doc, other)</label> <br>
                <input type="text" name="type" value= "<?php echo $type; ?>">
        </div>
        <div class="input-group btn">
            <input type="submit" name="submit" id = "submit" value="Submit" class="btn"/>
        </div>

    </form>
</body>
</html>