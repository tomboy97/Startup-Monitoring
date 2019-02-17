<?php
	session_start();
	require("connect.php");
	$comp_name = mysqli_real_escape_string($connection, $_POST['comp_name']);
	//mysqli_query($connection, "SELECT * FROM usermanagement WHERE username = '$username';");
	//mysqli_query($connection, "UPDATE usermanagement SET active = '0';");
	if(session_destroy())
	header("Location: login.php");
?>