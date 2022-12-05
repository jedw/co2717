<?php
    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $servername = "localhost";
        $username = "student";
        $password = "website";
        $dbasename = "mydatabase";
        // Create connection
        $mysqli = new mysqli($servername, $username, $password, $dbasename);
        // Check connection
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        
        $myfile_blob = file_get_contents($_FILES['myfile']['tmp_name'], FILE_USE_INCLUDE_PATH);
        $stmt = $mysqli->prepare("INSERT INTO filetest (textfield, myfile) VALUES (?,?)");
        $stmt->bind_param('sb', $_POST['textfield'], $myfile_blob);
        $success = $stmt->execute(); 
        
        $stmt->close();
        $mysqli->close(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload a file</title>
</head>
<body>
    <form action="upload_a_file.php" method="POST" enctype="multipart/form-data">
        <input type="text" id="textfield" name="textfield"/>
        <br>
        <input type="file" id="myfile" name="myfile"/>
        <br>
        <input type="submit" id="submit" name="submit" value="submit"/>
    </form>
</body>
</html>

<!-- is this a fix? https://www.php.net/manual/en/mysqli-stmt.send-long-data.php ->