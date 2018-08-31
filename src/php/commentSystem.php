<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Please login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Social Buttons CSS -->
    <link href="../../vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/dashTheme.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form role="form">
                <br>

                <?php
                // define variables and set to empty values
                $nameErr = $emailErr = $genderErr = $websiteErr = "";
                $name = $email = $gender = $comment = $website = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["name"])) {
                        $nameErr = "Name is required";
                    } else {
                        $name = test_input($_POST["name"]);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                            $nameErr = "Only letters and white space allowed";
                        }
                    }

                    if (empty($_POST["email"])) {
                        $emailErr = "Email is required";
                    } else {
                        $email = test_input($_POST["email"]);
                        // check if e-mail address is well-formed
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailErr = "Invalid email format";
                        }
                    }

                    if (empty($_POST["website"])) {
                        $website = "";
                    } else {
                        $website = test_input($_POST["website"]);
                        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                            $websiteErr = "Invalid URL";
                        }
                    }

                    if (empty($_POST["comment"])) {
                        $comment = "";
                    } else {
                        $comment = test_input($_POST["comment"]);
                    }

                    if (empty($_POST["gender"])) {
                        $genderErr = "Gender is required";
                    } else {
                        $gender = test_input($_POST["gender"]);
                    }
                }

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                ?>

                <h2>PHP Form Validation Example</h2>
                <p><span class="error">* required field</span></p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    Name: <input type="text" name="name" value="<?php echo $name;?>">
                    <span class="error">* <?php echo $nameErr;?></span>
                    <br><br>
                    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                    <span class="error">* <?php echo $emailErr;?></span>
                    <br><br>
                    Website: <input type="text" name="website" value="<?php echo $website;?>">
                    <span class="error"><?php echo $websiteErr;?></span>
                    <br><br>
                    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                    <br><br>
                    Gender:
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
                    <span class="error">* <?php echo $genderErr;?></span>
                    <br><br>
                    <input type="submit" name="submit" value="Submit">
                </form>

                <?php
                echo "<h2>Your Input:</h2>";
                echo $name;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $website;
                echo "<br>";
                echo $comment;
                echo "<br>";
                echo $gender;
                ?>

                <div class="form-group">
                    <label>Add a comment</label>
                    <textarea rows="3" class="form-control" placeholder="Enter text"></textarea>
                </div>

                <div class="form-group">
                    <label>Add an attachment</label>
                    <input type="file">
                </div>

                <button type="submit" class="btn btn-default">Submit Comment</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap Core JavaScript -->
<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
