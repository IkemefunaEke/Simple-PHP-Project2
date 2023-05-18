<?php
    $conn = new mysqli($server, $username, $password, $database);
    $query = "SELECT * FROM booksIE";
    $rs = $conn->query($query);
    $conn->close();
    $num = $rs->num_rows;
 ?>
