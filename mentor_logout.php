<?php
	session_start();
	require("connect.php");
	//$name = mysqli_real_escape_string($connection, $_POST['name']);
	//mysqli_query($connection, "SELECT * FROM usermanagement WHERE username = '$username';");
	//mysqli_query($connection, "UPDATE usermanagement SET active = '0';");
	if(session_destroy())
	header("Location: mentor_login.php");
?>