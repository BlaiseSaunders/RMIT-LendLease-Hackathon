<?php

require "sql_header.php";


$docuCreate = "INSERT INTO Document (name, DocumentType) VALUES ";
$docuDataInsert = "INSERT INTO Document (documentID, dataType, dataLocation) VALUES ";


$documentName = $_POST['title'];
$documentType = "Smart Document...";



echo "document title: ".$documentName;


if ($conn->query($docuCreate."( '".$documentName."', '".$documentType."' )") == TRUE)
{    
	$last_id = $conn->insert_id;
	echo "New record created successfully. Last inserted ID is: " . $last_id;
} 
else
    echo "Error: " . $conn->error;



foreach ($_POST['text_field'] as $text)
{
	echo "<br> TETX: $text<br>";
}



echo "<h1>Document Generated!! (probably)</h1>";

?>
