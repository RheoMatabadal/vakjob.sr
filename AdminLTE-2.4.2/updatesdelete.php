<?php

require 'includes/database.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['id'])) {

        $rowToDelete = intval($_POST['id']);

         $query = "DELETE FROM announcements WHERE id=" . $rowToDelete . " LIMIT 1";
         $result = mysqli_query($conn, $query);

         header('http://localhost/Git/vakjob.sr/AdminLTE-2.4.2/updates.php');
         }
}


?>