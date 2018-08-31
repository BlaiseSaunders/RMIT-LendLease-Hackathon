<!doctype html>
<html>
<head>
    <?php
    include 'bootstrap.php';
    ?>

    <script type="text/javascript" src="../js/DocGeneration.js"></script>
    <script type="text/javascript" src="../js/AddField.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../css/docGeneration.css">
</head>
<body>
<?php
include_once 'pageHeader.php';
?>
<div class="container">
    <div class="row col-md-12" id="DocTitle">
        <h1 class="title-float-left">Title: </h1>
        <h2 class="title-float-right"><strong><?php echo $_POST['title'] ?></strong></h2>
        <hr class="float-clear separate-line">
    </div>
</div>
<br>
<!-- MY NAME IS JEFF -->
<div class="container">
    <div id="docDetail">
        <div class="row col-md-12">
            <form action="generateFinal.php" method="post" enctype="multipart/form-data">
                <div class="container" id="docIdentifier">
                    <p>Incident circumstance: </p><input type="text" id="incidentCircumstance"
                                                         name="incidentCircumstance"
                                                         placeholder="Incident circumstance..."/>
                    <p>Incident No.: </p><input type="text" id="incidentDate" name="incidentDate"
                                                placeholder="Incident No."/>
                    <p>Issued by: </p><input type="text" id="docAuthor" name="docAuthor" placeholder="Author..."/>
                    <p>Incident Date: </p><input type="date" id="incidentDate" name="incidentDate"
                                                 placeholder="Incident date..."/>
                </div>
                <hr class="separate-line">
                <div class="container" id="docLearning">
                    <p>Description of incident: </p>
                    <textarea placeholder="Description of incident..."></textarea>
                    <p>Key Learning: </p>
                    <textarea placeholder="Key learning point..."></textarea>
                </div>
                <hr class="separate-line">
                <div class="container" id="docAddition">
                    <h3>Please select the type of format you want to add to the document: </h3>
                    <div class="dropdown">
                        <button class="dropbtn">Dropdown</button>
                        <div class="dropdown-content">
                            <a onclick="add_field('text')">Text</a>
                            <a onclick="add_field('video')">Video</a>
                            <a onclick="add_field('audio')">Audio</a>
                            <a onclick="add_field('audio')">Image</a>
                        </div>
                    </div>
                    <input name="title" type="hidden" value="<?php echo $_POST['title'] ?>"/>

                    <div id="form_zone">
                    </div>
                </div>
                <hr class="separate-line">
                <div class="container" id="conclusion">
                    <h5>Conclusion</h5>
                    <textarea placeholder="Conclusion..."></textarea>
                </div>

                <div class="container" id="thingmark">
                    <img src="../img/thingmark.png" alt="thingmark to scan">
                </div>

                <div class="container" id="docSubmitButton">
                    <button class="btn btn-primary">Confirm</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
</body>
</html>
