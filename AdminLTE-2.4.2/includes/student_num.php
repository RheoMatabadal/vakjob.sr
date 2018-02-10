<?php
   require 'includes/database.php';

    // $result = $conn->query ("SELECT count(*)FROM students");
    // printf $result;
   //  $row_cnt = $result->row_count;
  	// printf($row_cnt);
    
    // $sql = "SELECT count(*) FROM students";
    // $query= mysqli_query($conn, $sql);
    // $student= mysqli_fetch_assoc($query);
    // $student['count(*)'];
   foreach($conn->query('SELECT COUNT(*) FROM students') as $row) {

echo$row ['COUNT(*)'];

}
    ?>