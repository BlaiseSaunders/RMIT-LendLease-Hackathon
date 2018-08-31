<?php

require "sql_header.php";


$docuCreate = "INSERT INTO Document (name, DocumentType) VALUES ";
$docuDataInsert = "INSERT INTO DocumentData (documentID, dataType, dataLocation) VALUES ";


$documentName = $_POST['title'];
$documentType = "1";



echo "document title: ".$documentName;


if ($conn->query($docuCreate."( '".$documentName."', '".$documentType."' )") == TRUE)
{    
	$last_id = $conn->insert_id;
	echo "New record created successfully. Last inserted ID is: " . $last_id;
} 
else
    echo "Error: " . $conn->error;

$documentID = $last_id;


$dataLocation = "/srv/files/";
foreach ($_POST['text_field'] as $text)
{
	echo "<br> TETX: $text<br>";
	$hash = hash("md5", $text);
	$thisDataLocation = $dataLocation.$hash;
	file_put_contents($thisDataLocation, $text);
	if ($conn->query($docuDataInsert."( '".$documentID."', 'text', '".$thisDataLocation."' )") == TRUE)
	{    
		$last_id = $conn->insert_id;
		echo "New record created successfully. Hash: ".$hash."Last inserted ID is: " . $last_id;
	} 
	else
	echo "Error: " . $conn->error;
}
foreach ($_POST['file_upload'] as $file) // TODO: MAKE THIS
{
	echo "<br> TETX: $text<br>";
	$hash = hash("md5", $text);
	$thisDataLocation = $dataLocation.$hash;
	file_put_contents($dataLocation, $text);
	if ($conn->query($docuDataInsert."( '".$documentID."', 'text', '".$thisDataLocation."' )") == TRUE)
	{    
		$last_id = $conn->insert_id;
		echo "New record created successfully. Hash: ".$hash."Last inserted ID is: " . $last_id;
	} 
	else
	echo "Error: " . $conn->error;
}



echo "<h1>Document Generated!! (probably)</h1>";

?>
