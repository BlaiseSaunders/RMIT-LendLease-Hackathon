<?php
	require "sql_header.php";

	$sql = "INSERT INTO links (name, url) VALUES ('".htmlspecialchars($_GET["name"])."', '".htmlspecialchars($_GET["url"])."')";
	echo "<h1>";
	echo "Running ".$sql;
	if ($conn->query($sql) === TRUE)
	{
		echo "Created link to ".htmlspecialchars($_GET["url"])." with title ".htmlspecialchars($_GET["name"]);
		$conn->close();
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	else
		echo "Something happened with: ".$sql."<br> Error:".$conn->error;

	echo "</h1>";

?>
