<!doctype html>
<html>
<?php
include 'bootstrap.php';
?>
<script type="text/javascript" src="../js/DocGeneration.js"></script>

<body>
<?php
include_once 'pageHeader.php';
?>
<div class="row text-center col-md-12">
    <h1>Title of the Document</h1>
    <form method="POST" action="generateDocDetail.php" onsubmit="return validation()">
        <input type="text" id="title" name="title" size="40" placeholder="Please enter document title"/><br>
        <hr style="visibility: hidden">
        <div class="col-md-12 row">
            <button class="btn btn-primary" type="submit">Next</button>
        </div>
    </form>
</div>
</body>
</html>