<?php
$con = mysqli_connect('127.0.0.1:3307','root');
if (!$con)
{
	die("Database Connection Not Found". mysqli_error($con));
}

$select_db = mysqli_select_db($con, 'project');
if (!$select_db)
{
	die("Database Connection Failed". mysqli_error($con));
}

?>