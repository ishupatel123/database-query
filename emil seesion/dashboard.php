<?php
	require "config.php";
		session_start();
		if(!isset($_SESSION['email']))
		{
			header("location:dashboard.php");
		}
?>

<h1 align="center">Welcome</h1>
<a href="logout.php">Logout</a>