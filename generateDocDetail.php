<!doctype html>
<html>
<?php
include 'bootstrap.php';
?>
<script type="text/javascript" src="js/DocGeneration.js"></script>

<body onload="getTitle()">
<div class="container row col-md-4 text-center">
    <h1><?php echo $_POST['title'] ?></h1><strong id="DocTitle"></strong>
</div>
</body>
</html>