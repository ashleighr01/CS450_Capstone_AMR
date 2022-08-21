<?php

if (isset($_POST["submit"])) {
    echo "Your profile has been updated!";


    $team = $_POST["team"];
    $goal = $_POST["goal"];
    $gCode = $_POST["goal"];
    $intensity = $_POST["intensity"];
    $iCode = $_POST["intensity"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptyProfile($team, $goal, $intensity) !== false) {
        header("location: ../../Team.php?error=emptyinput");
        exit();
    }
    if(invalidTeam($team) !== false) {
        header("location: ../../Team.php?error=invalidteam");
        exit();
    }
    if(invalidGoal($goal) !== false) {
        header("location: ../../Team.php?error=invalidgoal");
        exit();
    }
    if(invalidIntensity($intensity) !== false) {
        header("location: ../../Team.php?error=invalidgoal");
        exit();
    }
    if(teamMatch($conn, $team) == false) {
        header("location: ../../Team.php?error=teamnotfound");
        exit();
    }

    updateProfile($conn, $team, $goal, $gCode, $intensity, $iCode);
} else {
    header("location: ../../Team.php");
}