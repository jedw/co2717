<?php

function retrieve(){
    include 'connect.php';	
	$query = $mysqli->query("SELECT * FROM comments");
	$comments = array();

	while($row = $query->fetch_array()){
		array_push($comments, $row);
    	}
    
	$mysqli->close();

	header("Content-type: application/json");
	echo json_encode($comments);
}

function insert(){
    include 'connect.php';	
    $com = $_POST['com'];	
	$stmt = $mysqli->prepare("INSERT into comments (comment) VALUES (?)");
	$stmt->bind_param('s', $com);
	$success = $stmt->execute(); 

	$stmt->close();
	$mysqli->close();
}

switch($_SERVER['REQUEST_METHOD']) {
    case "GET":
        retrieve();
        break;
    case "POST":
        insert();
        break;
}
?>
