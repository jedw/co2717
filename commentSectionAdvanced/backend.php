<?php

function retrieve(){
	include 'connect.php';	
	$query = $mysqli->query("SELECT * FROM comments");
	$comments = array();

	while($row = $query->fetch_assoc()){
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

function delete(){
	include 'connect.php';	
    $id = $_GET['id'];	
	$stmt = $mysqli->prepare("DELETE FROM comments WHERE id=?");
	$stmt->bind_param('s', $id);
	$success = $stmt->execute(); 
	
	$stmt->close();
	$mysqli->close();
}

$mode = $_GET['mode'];

switch($mode) {
    case "read":
        retrieve();
        break;
    case "insert":
        insert();
        break;
	case "delete":
		delete();
		break;
}
?>