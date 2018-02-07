<?php

session_start();

if (isset($_POST['submit'])) {
 include 'dbh.inc.php';

 $gebruikersnaam = mysqli_real_escape_string($conn, $_POST['gebruikersnaam']);
 $wachtwoord = mysqli_real_escape_string($conn, $_POST['wachtwoord']);

 //erro handles
 //check if inputs are empty

 if (empty($gebruikersnaam) || empty($wachtwoord)) {
 		if ($resultCheck < 1) {
 		header("Location: ../index.php?login=empty");
 		exit();
 }else{
 	$sql = "SELECT * FROM admins WHERE username= '$gebruikersnaam'";
 	$result = mysqli_query($conn, $sql);
 	$resultCheck = mysqli_num_rows($result);

 	if ($resultCheck < 1) {
 		header("Location: ../index.php?login=error1");
 		exit();

 	}else{
 		if ($row = mysqli_fetch_assoc($result)) {
 			//dehashing password
 			$hashedPwdCheck = password_verify($wachtwoord, $row['wachtwoord']);	
 			if (hashedPwdCheck == false) {
 				header("Location: ../index.php?login=error2");
 				exit();
 			}elseif (hashedPwdCheck == true) {
 				//log in the user here
 				$_SESSION['u_id'] = $row['id'];
 				$_SESSION['gebruikersnaam'] = $row['username'];
 				header("Location: ../start.php?login=success");
 				exit();
 			}
 		}
 	}
 }
}
//deze error hier wordt displayed in die browser url bar
 else{
 	header("Location: ../index.php?login=error3");
 	exit();
 }
}