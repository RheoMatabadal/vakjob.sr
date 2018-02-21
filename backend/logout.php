<?php

if (isset($_POST['submit'])) {
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../index.php");
	// exit();

}

session_start();
session_unset();
session_destroy();
header("Location: ../index.php");