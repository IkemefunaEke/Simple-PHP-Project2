<?php
$conn = new mysqli($server, $username, $password, $database);
if ($delete) {
$query = "DELETE FROM ShopIE.booksIE WHERE book_id='".$book_id."'";
$conn->query($query);
}
$conn->close();
?>