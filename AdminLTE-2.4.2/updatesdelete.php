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

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['id'])) {

        $rowToDelete = intval($_POST['id']);

         $query = "DELETE FROM announcements WHERE id=" . $rowToDelete . " LIMIT 1";
         $result = mysqli_query($conn, $query);

         header('Location:http://localhost/vakjob.sr/AdminLTE-2.4.2/updates.php');
         }
}


?>