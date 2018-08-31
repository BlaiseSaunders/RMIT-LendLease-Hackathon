<?php

require "sql_header.php";


$docuCreate = "INSERT INTO Document (name, DocumentType) VALUES ";
$docuDataInsert = "INSERT INTO Document (documentID, documentType) VALUES ";


$documentName = $_POST['title'];
$documentType = $_POST['PLACEHOLDER'];



echo "document title: ".$documentName;




echo "<h1>Document Generated!! (probably)</h1>";

?>
