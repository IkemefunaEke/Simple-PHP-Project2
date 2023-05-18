<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'PHP_IE\headPartHtml_IE.php'; ?>
 <?php include 'PHP_IE\base_IE.php'; ?>
 <?php include 'PHP_IE\booksResultSet_IE.php'; ?>
</head>
<body>
<header><?php include 'PHP_IE\header_IE.php'; ?></header>
<h2>These are the books we have</h2>
<h3>We will have more soon: <?php echo $num?></h3>
Destroy<br>
<form action="shopStart_IE_52127.php" method="POST">
<select name="delete">
<?php
$i=0;
while ($i< $num) {
$rs->data_seek($i);
$row = $rs->fetch_assoc();
$option = "<option value=".$row["book_id"].">";
$option .= $row["title"].' - ';
$option .= $row["author"].' - ';
$option .= $row["price"].' - ';
$option .= "</option>";
echo $option;
$i++;
}
?>
</select>
<input type="submit" value="remove">
</form>

<footer>
<?php include 'PHP_IE\footer_IE.php'; ?>
</footer>
</body>
</html>