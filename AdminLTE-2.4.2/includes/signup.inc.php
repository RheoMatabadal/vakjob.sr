<?php

if (isset($_POST['submit'])) {
include_once 'dbh.inc.php';

$gebruikersnaam = mysqli_real_escape_string($conn, $_POST['gebruikersnaam']);
$wachtwoord = mysqli_real_escape_string($conn, $_POST['wachtwoord']);

//error handlers
//check for emptyfields

if (empty($gebruikersnaam) || empty($wachtwoord)) {
	header("Location: ../gebruikers.php?toevoegenveld=leeg");
	exit();
}else{
	//check if input characters are valid
	if (!preg_match("/^[a-zA-Z]*$/", $gebruikersnaam)) {
		header("Location: ../gebruikers.php?toevoegenveld=invalidteken");
	    exit();

	}else{
		$sql="SELECT * FROM  admins WHERE username = '$gebruikersnaam'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
			header("Location: ../gebruikers.php?toevoegenveld=usertaken");
	    exit();

		}else{
			//hashing password
			$hashedPwd = password_hash($wachtwoord, PASSWORD_DEFAULT);
			//insert user into db

			$sql="INSERT INTO admins (username, wachtwoord) VALUES ('$gebruikersnaam', '$hashedPwd')";
			$result= mysqli_query($conn, $sql);
			header("Location: ../gebruikers.php?toevoegenveld=success");
	    exit();
		}
	}

}

}else{
	header("Location: ../gebruikers.php");
	exit();
}

?>