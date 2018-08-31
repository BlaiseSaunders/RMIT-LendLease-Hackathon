<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Please login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Social Buttons CSS -->
    <link href="../../vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/dashTheme.css" rel="stylesheet">

    <script src="getComments.js"></script>
    
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id='comments'> </div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
	    <form role="form" method='POST' action='addComment.php'>
	    <input type='hidden' name='documentID' value='<?php echo $_GET['documentID']; ?>' />
                <br />
                <div class="form-group">
                    <label>Add a comment</label>
                    <textarea name='text' rows="3" class="form-control" placeholder="Enter text"></textarea>
                </div>

                <div class="form-group">
                    <label>Add an attachment</label>
                    <input type="file">
                </div>

                <button type="submit" class="btn btn-primary">Submit Comment<i class="fa fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap Core JavaScript -->
<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
