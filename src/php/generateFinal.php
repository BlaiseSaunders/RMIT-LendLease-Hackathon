<?php

require "sql_header.php";


$docuCreate = "INSERT INTO Document (name, DocumentType) VALUES ";
$docuDataInsert = "INSERT INTO Document (documentID, dataType, dataLocation) VALUES ";


$documentName = $_POST['title'];
$documentType = "Smart Document...";



echo "document title: ".$documentName;


foreach ($_POST['text_field'] as $text)
	echo "<br> TETX: $text<br>";



echo "<h1>Document Generated!! (probably)</h1>";

?>
