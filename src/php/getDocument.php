<?php

require "sql_header.php";

$docuGet = "SELECT documentID, name FROM Document ";

var_dump($_GET);

if (isset($_GET['docunum']) == TRUE)
{
	$docuGet .= "WHERE documentID=".$_GET['docunum'];
	echo "DOCUNUM <br/>$docuGet<br/>";
}


$docuDataGet = "SELECT documentID, dataType, dataLocation FROM DocumentData WHERE documentID=";


$result = $conn->query($docuGet);
if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		echo "Got document: ".$row['name']."<br/>";
		$documentID = $row['documentID'];
		$docres = $conn->query($docuDataGet.$documentID);
		if ($docres->num_rows > 0)
		{
			while ($dataRow = $docres->fetch_assoc())
			{
				echo "Got document data: ".$dataRow['dataLocation']."<br/>";	
				echo "Data type: ".$dataRow['dataType']."<br/>";
				if ($dataRow['dataType'] == 1)
					echo "<img src='".$dataRow['dataLocation']."'/>";
				else
					echo file_get_contents($dataRow['dataLocation'])."<br/>";
			}
		}
		else
			echo "This document does nto have any attachments";
	}
}
else
	echo "0 Rows back sorry fam";

$documentID = $last_id;


$dataLocation = "/srv/files/";



?>
