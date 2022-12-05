<?php
    $servername = "localhost";
    $username = "student";
    $password = "website";
    $dbasename = "mydatabase";
    $locations = array();

    $mysqli = new mysqli($servername, $username, $password, $dbasename);

    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    
    $sql = "SELECT team, lat, lon FROM coords";
    $result = $mysqli->query ($sql);

    while($row = $result->fetch_assoc()){
        array_push($locations, $row);
    }

    header("Content-type: application/json");
    echo json_encode($locations);
?>
