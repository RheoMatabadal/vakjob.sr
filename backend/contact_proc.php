<?php
  require_once 'backend/database.php';

  // Report submit
  if(isset($_POST['submit'])) {
    require 'backend/database.php'; // Require database

    // Get POST request vars
    $name= $_POST['name'];
    $email  = $_POST['email'];
    $onderwerp = $_POST['onderwerp'];
    $bericht = $_POST['bericht'];


    $sql = "INSERT INTO messages (naam, email, onderwerp, bericht) VALUES ('$name','$email', '$onderwerp' ,'$bericht')";
    if($conn->query($sql)) {
      // This is only text. Change this later!!
      echo "Report verzonden!";
      header("Location: ../contact.php");
    }
  }
?>