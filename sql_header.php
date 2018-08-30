<?php


	$servername = $settings->host;
	$username   = $settings->username;
	$password   = $settings->password;
	$db_name    = $settings->db_name;

	$conn = new mysqli($servername, $username, $password, $db_name);

	if ($conn->connect_error)
		die("MySQL connection failure: " . $conn->connect_error);



?>
