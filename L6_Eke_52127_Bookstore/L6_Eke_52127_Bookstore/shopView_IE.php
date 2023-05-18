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
<h3>Enjoy all of them: <?php echo $num?></h3>
<table>
<tr>
<th>id</th>
<th>title</th>
<th>author</th>
<th>price</th>
</tr>
<?php include 'PHP_IE\booksTable_IE.php'; ?>
</table>
<footer>
<?php include 'PHP_IE\footer_IE.php'; ?>
</footer>
</body>
</html>