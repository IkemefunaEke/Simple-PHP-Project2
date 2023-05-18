<?php
$enter = TRUE;
echo 'wpis: ', $enter, '<br>';
if (isset($_POST['title'])) {$title = $_POST['title'];} else {$enter = FALSE;}
if (isset($_POST['author'])) {$author = $_POST['author'];} else {$enter = FALSE;}
if (isset($_POST['price'])) {$price = $_POST['price'];} else {$enter = FALSE;}
echo 'Enter: ', $enter, '<br>';
?>