<?php
    $dbServername = "localhost";
    $dbUsername = "root";
<<<<<<< HEAD
    $dbPassword = "root";
    $dbName = "vakjobsr";
=======
    $dbPassword = "";
    $dbName = "vakjob";
>>>>>>> 0e97b03375886c303bc710a8062ed6929ddd63ff
    
    $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

    if($conn->connect_error) {
		echo "Error:" . $conn->connect_error;
	}
?>