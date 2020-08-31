<?php
session_start();
if (isset($_SESSION['email']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
	<h1>welocme to our site!!!....</h1>
	<?= "{$_SESSION['email']}" ?>	
	
</body>
</html>
<?php
}
else
{
	header('location:index.php');
}
?>










