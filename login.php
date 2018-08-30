<!doctype html>
<html>
    <?php 
        include 'bootstrap.php';
    ?>

    <body>
        <div class="row">
            <h1 class="container; text-center">Login</h1>
        </div>
        <form method="POST" action="validation.php">
            <div class="row">
                <p class="text-center">Username: <input type="text" id="username" name="username"></p><br>
                <p class="text-center">Password: <input type="password" id="password" name="password"></p>
            </div>
            <div class="col-md-12 text-center row">
                <button class="btn btn-primary">Enter</button>
            </div>
        </form>
    </body>
</html>