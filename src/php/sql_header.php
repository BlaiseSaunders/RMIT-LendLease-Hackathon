<?php


	$servername = "localhost";
	$username   = "php";
	$password   = "abc..123";
	$db_name    = "hackathon";

	$conn = new mysqli($servername, $username, $password, $db_name);

	if ($conn->connect_error)
		die("MySQL connection failure: " . $conn->connect_error);



?>
