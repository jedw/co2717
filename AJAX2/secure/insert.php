<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['uname'])) 
{ // Check if form data has actually been posted
    $fn = $_POST['fname']; // Initialize variables from POST data
    $sn = $_POST['sname'];
    $un = $_POST['uname'];
    $pw = $_POST['pword'];
    $em = $_POST['email'];

    include 'connect.php';
    
    $stmt = $mysqli->prepare("SELECT username FROM ajaxcheckuser WHERE username=?");
	$stmt->bind_param('s', $un);
	$stmt->execute();
	$user = $stmt->get_result()->fetch_assoc();
	
    if (!empty($user['username'])) 
    {
        echo '<p>Naughty, Naughty! somebody has managed to defeat the front-end validation haven\'t they ...well hard luck this username is already taken!</p>';
        $stmt->close();
        $mysqli->close();
    }
    else
    {
        echo '<p>All is well</p>';
        $stmt = $mysqli->prepare("INSERT into ajaxcheckuser (firstname, surname, username, password, email) VALUES (?,?,?,?,?)");
        $stmt->bind_param('sssss', $fn, $sn, $un, $pw, $em);
        $success = $stmt->execute(); 

        if ($success) 
        { 
            // if executing the query returns TRUE then it has inserted correctly
            echo 'Form Submitted successfully';
            echo '<br/><a href="index.php">Back</a>';
        }
        $stmt->close();
        $mysqli->close();
    }
}
?>
</body>
</html>