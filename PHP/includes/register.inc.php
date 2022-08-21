<?php

if (isset($_POST["submit"])) {
    echo "You are registered!";


    $team = $_POST["team"];
    $school = $_POST["school"];
    $age = $_POST["age"];
    $sport = $_POST["sport"];
    $season = $_POST["season"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptyRegister($team, $school, $age, $sport, $season) !== false) {
        header("location: ../../Index.php?error=emptyinput");
        exit();
    }
    if(invalidTeam($team) !== false) {
        header("location: ../../Index.php?error=invalidteam");
        exit();
    }
    if(invalidSchool($school) !== false) {
        header("location: ../../Index.php?error=invalidschool");
        exit();
    }
    if(invalidAge($age) !== false) {
        header("location: ../../Index.php?error=invalidage");
        exit();
    }
    if(invalidSport($sport) !== false) {
        header("location: ../../Index.php?error=invalidsport");
        exit();
    }
    if(invalidSeason($season) !== false) {
        header("location: ../../Index.php?error=invalidseason");
        exit();
    }

    createCoach($conn, $school, $sport, $season, $age, $team);
} else {
    header("location: ../../Index.php");
}