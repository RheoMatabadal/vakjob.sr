<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "new_vakjob";
    
    $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

    if($conn->connect_error) {
		echo "Error:" . $conn->connect_error;
	}
?>