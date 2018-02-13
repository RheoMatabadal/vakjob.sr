<?php
   require 'includes/database.php';

   foreach($conn->query('SELECT COUNT(*) FROM employers') as $row) {

echo$row ['COUNT(*)'];

}
    
    // $sql = "SELECT count(*) FROM students";
    // $query= mysqli_query($conn, $sql);
    // $student= mysqli_fetch_assoc($query);
    // $student['count(*)'];
    ?>