<?php

require "sql_header.php";


$docuGet = "SELECT documentID, name FROM document";
$docuDataGet = "SELECT documentID, dataType, dataLocation FROM DocumentData WHERE documentID=";


$result = $conn->query($docuGet);
if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		echo "AYY: ".$row['documentID'];
	}
}
else
	echo "0 Rows back sorry fam";

$documentID = $last_id;


$dataLocation = "/srv/files/";


echo "<h1>Document Generated!! (probably)</h1>";

?>
