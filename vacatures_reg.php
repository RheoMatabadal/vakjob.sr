<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vakjob";

	// The connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//testing the connection
	if ($conn->connect_error){
		die("connection failed: " .$conn->connect_error);
	}

	if(isset($_POST['submit'])) {
		  

		$name = $_POST['name'];
		$locatie = $_POST['locatie'];
		$datefilter = $_POST['datefilter'];
		$start_werktijd = $_POST['start_werktijd'];
		$eind_werktijd = $_POST['eind_werktijd'];
		$message = $_POST ['message'];

		$sql = "INSERT INTO vacatures_test (name, locatie, datefilter, start_werktijd, eind_werktijd, message) VALUES ('$name', '$locatie', '$datefilter', '$start_werktijd', '$eind_werktijd', '$message');";

		if($conn->query($sql) == TRUE){
			echo "Report verzonden";
			header('Location:http://localhost/vakjob.sr/vacatures.php');
		} else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}







?>