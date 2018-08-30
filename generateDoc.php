<!doctype html>
<html>
    <?php
        include 'bootstrap.php';
    ?>
    <script type="text/javascript" src="js/DocGenerationValidation.js"></script>

    <body>
        <div class="row text-center col-md-12">
            <h1>What is the title?</h1>
            <form method="POST" action="generateDocDetail.php">
                <input type="text" id="title" name="title">

                <button>Cancel</button>
                <button onclick="event.preventDefault(); validation()">Next</button>
            </form>
        </div>
    </body>
</html>