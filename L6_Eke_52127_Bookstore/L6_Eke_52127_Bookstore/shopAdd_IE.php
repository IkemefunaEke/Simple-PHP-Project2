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
<h3>We will get more: <?php echo $num?></h3>
<article>
We add books
</article>
<form action="shopStart_IE_52127.php" method="POST">
<table>
<tr><td></td><td>Enter</td></tr>
<tr><td>title</td><td><input type="text" name="title"></td></tr>
<tr><td>author</td><td><input type="text" name="author"></td></tr>
<tr><td>price</td><td><input type="text" name="price"></td></tr>
<tr><td>category_id</td><td><input type="text" name="category_id"></td></tr>
<tr><td></td><td><input type="submit" value="Save"></td></tr>
</table>
</form>
<footer>
<?php include 'PHP_IE\footer_IE.php'; ?>
</footer>
</body>
</html>