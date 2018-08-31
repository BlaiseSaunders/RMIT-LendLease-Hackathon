<!doctype html>
<html>
<?php
include 'bootstrap.php';
?>

<script type="text/javascript" src="../js/DocGeneration.js"></script>
<script type="text/javascript" src="../js/AddField.js"></script>
<link rel="stylesheet" type="text/css" href="../css/dropdown.css">
<link rel="stylesheet" type="text/css" href="../css/docGeneration.css">

<body>
<?php
include_once 'pageHeader.php';
?>
<div class="container">
<div class="row col-md-4" id="DocTitle">
    <h1 class="title-float-left">Title: </h1>
    <h2 class="title-float-right"><strong><?php echo $_POST['title'] ?></strong></h2>
    <hr class="float-clear">
</div>
</div>
<br>
<div class="container">
<div class="container row" id="DocDetail">
    <h3>Please select the type of format you want to add to the document: </h3>
    <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
            <a href="#" onclick="add_field('text')">Text</a>
            <a href="#" onclick="add_field('video')">Video</a>
            <a href="#" onclick="add_field('audio')">Audio</a>
        </div>
    </div>
    <div class="row col-md-12">
        <form action="generateFinal.php" method="post">
            <input type="hidden" value="<?php echo $_POST['title'] ?>"/>
            <div id="form_zone">

            </div>
            <div id="conclusion">
                <h5>Conclusion</h5>
                <textarea>

            </textarea>
            </div>
            <button class="btn btn-primary">Confirm</button>
        </form>
    </div>
</div>
</div>
</body>
</html>