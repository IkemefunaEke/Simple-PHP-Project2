<?php
$conn = new mysqli($server, $username, $password, $database);
if ($enter) {
$query = "INSERT INTO ShopIE(title, author, price,)";
$query .= "VALUES('".$title."','".$author."','".$price. "')";
$conn->query($query);
}
$conn->close();
 ?>