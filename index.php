<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Problem 1</h1>
	<form method="post" action="/practical/problem1.php">
		<label>Ugly Number : </label>
		<?php $num = isset($_GET['num']) ? $_GET['num'] : ''; ?>
		<input type="number" name="name" value="<?php echo $num; ?>" required>
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php 
		if (isset($_GET['ugly'])) {
			echo "<p> Number is ".$_GET['ugly']."</p>";
		}
	?>
	<br>
	<h1>Problem 2</h1>
	<form method="post" action="/practical/problem2.php">
		<label>Palindrome check : </label>
		<input type="text" name="name" value="" required>
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php 
		if (isset($_GET['check'])) {
			$msg = $_GET['check'] ? "Your string is Palindrome" : "Your string is not Palindrome";
			echo $msg;
		}
	?>
</body>
</html>