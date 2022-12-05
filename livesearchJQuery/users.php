<?php
$conn = new mysqli("localhost", "student", "website", "mydatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(!isset(($_POST['search']))||($_POST['search'] === "")){
    $sql = "SELECT firstname, lastname, email from livesearch ORDER BY lastname ASC";
}
else{
    $search = $_POST['search'];
$sql = "select firstname, lastname, email from livesearch where firstname like '%$search%' or lastname like '%$search%' ORDER BY lastname ASC";

}

$query = $conn->query($sql);
$users = array();

while($row = $query->fetch_assoc()){
	array_push($staff, $row);
}

$conn->close();

header("Content-type: application/json");
echo json_encode($users);
die();

?>
