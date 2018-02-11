<?php
  $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "vakjobsr";
    
    $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

    if($conn->connect_error) {
    echo "Error:" . $conn->connect_error;
  }

  // Report submit
  if(isset($_POST['submit'])) {
     // Require database

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