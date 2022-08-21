<?php

function emptyRegister($team, $school, $age, $sport, $season) {
    $result;
    if(empty($team) || empty($school) || empty($age) || empty($sport) || empty($season)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyProfile($team, $goal, $intensity) {
    $result;
    if(empty($team) || empty($goal) || empty($intensity)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptySelect($body, $core, $cardio) {
    $result;
    if(empty($body) || empty($core) || empty($cardio)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidTeam($team) {
    $result;
    if(!preg_match("/^[a-zA-Z]*$/", $team)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidSchool($school) {
    $result;
    if(!preg_match("/^[a-zA-Z]*$/", $school)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidAge($age) {
    $result;
    if(!preg_match("/^[0-9]*$/", $age)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidSport($sport) {
    $result;
    if(!preg_match("/^[a-zA-Z]*$/", $sport)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidSeason($season) {
    $result;
    if(!preg_match("/^[a-zA-Z]*$/", $season)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidGoal($goal) {
    $result;
    if(!preg_match("/^[bulkleanmaintain]*$/", $goal)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidIntensity($intensity) {
    $result;
    if(!preg_match("/^[highlow]*$/", $intensity)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function teamMatch($conn, $team) {
    $sql = "SELECT * FROM coach WHERE teamCode = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../update.inc.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $team);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createCoach ($conn, $school, $sport, $season, $age, $team){
    $sql = "INSERT INTO coach (school, sport, season, age, teamCode) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.inc.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssss", $school, $sport, $season, $age, $team);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../../Team.php?error=none");
    exit();
}

function updateProfile($conn, $team, $goal, $gCode, $intensity, $iCode) {
    $sql = "INSERT INTO exercise (teamCode, exerciseGoal, goalCode, exerciseIntensity, intensityCode) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../update.inc.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssss", $team, $goal, $gCode, $intensity, $iCode);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../../Exercise.php?error=none");
    exit();
}
