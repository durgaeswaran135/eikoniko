<?php
session_start();
if (isset($_SESSION['email']))
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="first.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="main">
  <nav>
    <ul>
      <li>
        <a href="index.php">Home</a>
</li></ul>
</nav> 
<h1>Welcome to Eikoniko!!!....</h1>
	<?= "{$_SESSION['email']}" ?>	

  <form >
  
    <div class="whole">
  <div class="container">
    <br><br><br>
    <br><br><br>
  <h1>Join Now</h1>
  <h3>Enterprise video conferencing with real-time messaging and content sharing</h3><br>
  Enter the link here<br>
  <input type="text" name="text" id="link" autocomplete="off">
  
  <input type="submit" name="submit" id="but" onclick="localhost:3000">
</div>
</div>
</form>
</div>



</body>
</html>
<?php
}
else
{
	header('location:index.php');
}
?>