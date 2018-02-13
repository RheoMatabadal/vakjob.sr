<?php

if (isset($_POST['submit'])) {
include_once 'database.php';

$gebruikersnaam = mysqli_real_escape_string($conn, $_POST['gebruikersnaam']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$bedrijfsnaam = mysqli_real_escape_string($conn, $_POST['bedrijfsnaam']);
$adres = mysqli_real_escape_string($conn, $_POST['adres']);
$wachtwoord = mysqli_real_escape_string($conn, $_POST['wachtwoordConfirm']);

//error handlers
//check for emptyfields

if (empty($gebruikersnaam) || empty($email) || empty($bedrijfsnaam)|| empty($wachtwoord)  || empty($wachtwoord)) {
	header("Location: ../registreer_bed.php?toevoegenveld=leeg");
	exit();
}else{
	//check if input characters are valid
	if (!preg_match("/^[a-zA-Z]*$/", $gebruikersnaam)) {
		header("Location: ../registreer_bed.php?toevoegenveld=invalidteken");
	    exit();

	}else{
		$sql="SELECT * FROM employers WHERE gebruikersnaam = '$gebruikersnaam'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) { 
			header("Location: ../registreer_bed.php?toevoegenveld=usertaken");
	    exit();

		}else{
			//hashing password
			$hashedPwd = password_hash($wachtwoord, PASSWORD_DEFAULT);
			//insert user into db

			$sql="INSERT INTO employers (gebruikersnaam, email, bedrijfsnaam, adres, wachtwoord) VALUES ('$gebruikersnaam', '$email', '$bedrijfsnaam','$adres', '$hashedPwd')";
			$result= mysqli_query($conn, $sql);
			header("Location: ../registreer_bed.php?toevoegenveld=success");
	    exit();
		}
	}

}

}else{
	header("Location: ../registreer_bed.php");
	exit();
}

?>