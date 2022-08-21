<?php

if (isset($_POST["submit"])) {
    echo "Your workout is being created!";


    $body = $_POST["body"];
    $core = $_POST["core"];
    $cardio = $_POST["cardio"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptySelect($body, $core, $cardio) !== false) {
        header("location: ../../Exercise.php?error=emptyinput");
        exit();
    }

    //selectExercise($conn, $body, $core, $cardio);
}