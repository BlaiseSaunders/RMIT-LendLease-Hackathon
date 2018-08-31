<!doctype html>
<html>
<head>
    <link href="../css/header.css" type="text/css" rel="stylesheet"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/dashTheme.css" rel="stylesheet" type="text/css"/>
    <link href="../css/documentFormat.css" rel="stylesheet" type="text/css"/>
</head>
<?php
include 'bootstrap.php';

require "sql_header.php";

include_once 'pageHeader.php';

$docuGet = "SELECT documentID, name FROM Document ";

$feed = true;

if (isset($_GET['docunum']) == TRUE) {
    $docuGet .= "WHERE documentID=" . $_GET['docunum'];
    $feed = false;
    //echo "DOCUNUM <br/>$docuGet<br/>";
}

$docuDataGet = "SELECT documentID, dataType, dataLocation FROM DocumentData WHERE documentID=";


$result = $conn->query($docuGet);
$documentID = 0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $docuID = $row['documentID'];
        if ($feed)
            echo "<a href='getDocument.php?docunum=$docuID'>";
        echo "<h1>Document: " . $row['name'] . "</h1><br/>";
        if ($feed)
            echo "</a>";
	$documentID = $row['documentID'];
        $docres = $conn->query($docuDataGet . $documentID);
        if ($docres->num_rows > 0 && $feed == false) {
            while ($dataRow = $docres->fetch_assoc()) {
                if ($dataRow['dataType'] == 1) {
                    echo "<h1> Image: </h1>";
                    echo "<img style='height: 200px;' src='" . $dataRow['dataLocation'] . "'/>";
                } else {
                    echo file_get_contents($dataRow['dataLocation']) . "<br/>";
                }

                echo "<hr/>";
            }
        } else if ($feed == false)
            echo "This document does nto have any attachments";

        echo <<<thingmark
<br>
<div class="center-block">
<img src='../img/thingmark.png'>
</div>
thingmark;
        echo "<hr>";

	echo '<div class="col-md-12" style="width=100%">';
	echo '<iframe id="myIframe" src="commentSystem.php?documentID='.$documentID.'" scrolling="yes" frameborder="0" style="height: 400px"></iframe>';
	echo '</div>';
	echo '<br>';
    }
} else
    echo "0 Rows back sorry fam";

$documentID = $last_id;


$dataLocation = "/srv/files/";


?>
</html>
