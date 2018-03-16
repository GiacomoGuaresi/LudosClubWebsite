<?php 
	include("../connection.php");
	session_start();
		
	if(isset($_GET["logging"]))
	{
		$user = $_POST["user"];
		$password = $_POST["password"];
		include_once("../connection.php");
		$sql="SELECT * FROM `User` WHERE `username` LIKE '$user' AND `password` LIKE '$password'";
		$query = mysqli_query($conn,$sql);
		if(mysqli_num_rows($query) == 1)
		{
			$_SESSION["logged"] = true;
			header("location: index.php");
		}
		else
		{
			echo("ERROR: login fallito");
		}
	}
	else if(isset($_GET["logout"]))
	{
		$_SESSION["logged"] = false;
		session_unset();
		session_destroy();
		header("location: index.php");
	}
	else if((!isset($_SESSION["logged"]))||($_SESSION["logged"] == false))
	{
		header("location: loginpanel.php");
	}
?>
