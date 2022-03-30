<?php
session_start();
if (isset($_SESSION["index"])) {
    $_SESSION["index"] --;
} else {
    $_SESSION["index"] = 0;
}
$note = htmlspecialchars($_POST["note"]);
$_SESSION["notes"][$_SESSION["index"]] = $note;
header("location:index.php");
?>