<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class = "main">
    <?php
    if(isset($_SESSION["notes"])) {
    foreach($_SESSION["notes"] as $index=>$note) {
        ?>
        <div class="border element">
        <div>
        <?= $note ?>
    </div>
    </div>
        <?php }}?>
    <div>
        <form action="addNote.html">
            <button type = "submit" class = "btn btn-dark button">
                Add Note
            </button>
        </form>
    </div>
</body>
</html>