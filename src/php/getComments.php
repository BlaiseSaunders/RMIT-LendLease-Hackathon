<?php
	require "sql_header.php";

	$documentID = $_GET['documentID'];

	$commentGet = "SELECT documentID, content  FROM Comment WHERE documentID=".$documentID;



	$result = $conn->query($commentGet);
	if ($result->num_rows > 0) 
	{
		while ($row = $result->fetch_assoc())
		{
			$content = $row['content'];
			echo "<b>Comment from John Smith: </b>";
			echo "<p>$content</p><br/>";
		}
	}
	else
	{
		echo "<h2>No comments. Be the first to add one!</h2>";
	}



?>
