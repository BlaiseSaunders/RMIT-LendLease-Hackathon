<?php

require "sql_header.php";


$commentCreate = "INSERT INTO Comment (userID, documentID, content) VALUES ";


$commentText = $_POST['text'];
$documentID = $_POST['documentID'];



echo "Comment text: ".$commentText."<br/>";
echo "Document ID: ".$documentID;


if ($conn->query($commentCreate." ( '0', '".$documentID."', '".$commentText."' )") == TRUE)
{    
	$last_id = $conn->insert_id;
	echo "New record created successfully. Last inserted ID is: " . $last_id;
} 
else
    echo "Error: " . $conn->error;

header('Location: ' . $_SERVER['HTTP_REFERER']);

echo "<h1>Comment Added</h1>";

?>
