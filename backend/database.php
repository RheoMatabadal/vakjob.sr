<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "vakjobsr";
    
    $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

    if($conn->connect_error) {
		echo "Error:" . $conn->connect_error;
	}
?>