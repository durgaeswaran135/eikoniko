
<?php
	session_start();
	require('connection.php');

	if ( isset($_POST['email']) and isset($_POST['password']) )
	{
		$email = $_POST['email'];
		$pass = $_POST['password'];

		$query = "SELECT * FROM `login` WHERE email = '$email' and password = '$pass' ";

		$result = mysqli_query($con, $query) or die(mysqli_error($con));
		$count = mysqli_num_rows($result);

		if ($count == 1)
		{
			$_SESSION['email'] = $email;
			header('location:first.php');
			$sql = "insert into count (username) values ('$email') ";
			mysqli_query($con, $sql);
		}
		else
		{
			header('location:index.php');
		}



	}



