<?php


if (isset($_POST['submit'])) {

include_once 'database.php';

$gebruikersnaam = mysqli_real_escape_string($conn, $_POST['gebruikersnaam']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$school = mysqli_real_escape_string($conn, $_POST['school']);
$adres = mysqli_real_escape_string($conn, $_POST['adres']);
$wachtwoord = mysqli_real_escape_string($conn, $_POST['wachtwoordConfirm']);


//error handlers
//check for emptyfields

if (empty($gebruikersnaam) || empty($email)  || empty($school) || empty($adres) || empty($wachtwoord)) {
	header("Location: ../registreer_stu.php?registratie=leeg");
	exit();
}
//else{
// 	//check if input characters are valid
// 	if (!preg_match("/^[a-zA-Z]*$/", $gebruikersnaam)|| !preg_match("/^[a-zA-Z]*$/", $school) || !preg_match("/^[a-zA-Z]*$/", $adres)) {
// 		header("Location: ../registreer_stu.php?toevoegenveld=invalidteken");

// 	    exit();

// 	} 
	else {
		$sql="SELECT * FROM  students WHERE gebruikersnaam = '$gebruikersnaam'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
			header("Location: ../registreer_stu.php?toevoegenveld=usertaken");
	    exit();

		}else{
			//hashing password
			$hashedPwd = password_hash($wachtwoord, PASSWORD_DEFAULT);
			//insert user into db

			$sql="INSERT INTO students (gebruikersnaam, email, school, adres, wachtwoord) VALUES ('$gebruikersnaam', '$hashedPwd', '$email', '$school', '$adres', '$wachtwoord')";
			$result= mysqli_query($conn, $sql);
			header("Location: ../login_stu.php?toevoegenveld=success");
	    	exit();
		}
	}

}

else{
	header("Location: ../regstudent.php");
	exit();
}

?>