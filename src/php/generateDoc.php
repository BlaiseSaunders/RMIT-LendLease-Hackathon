<!doctype html>
<html>
<?php
include 'bootstrap.php';
?>
<script type="text/javascript" src="js/DocGeneration.js"></script>

<body>
<div class="row text-center col-md-12">
    <h1>What is the title?</h1>
    <form method="POST" action="generateDocDetail.php" onsubmit="return validation()">
        <input type="text" id="title" name="title" placeholder="Please enter document title"><br>

        <div class="col-md-12 row">
            <button class="btn btn-primary" type="submit">Next</button>
        </div>
    </form>
</div>
</body>
</html>