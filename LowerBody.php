<?php
    include_once 'PHP/includes/dbh.inc.php';
    include_once 'PHP/includes/function.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Team Elite: Your Fitness Guide</title>
        <link rel="stylesheet" href="CSS/CapstoneDesign.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    </head>
    <body id="Contents">
        <div id="navbar">
            <nav class="navbar navbar-expand-lg text-bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="Index.php">Team Elite</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Team.php">Team Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Exercise.php">Exercises</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
        </div>
        <div id="img"><img src="img/Dumbbells.jpg" alt="Dumbbells"></div>
        <div id="exerciseSelection">
            <h1><strong>It's an Lower Body Day!</strong></h1><br>
            <p>Below, you will select the four exercises you are interested in completing today. <br>
        Once selected, each exercise, repetitions, sets, and any cardio or core supplements will be displayed.</p>
            <select name="exercises1" onchange="showLowWorkout(this.value)">
                <option value=""> Select your first exercise:</option>
                <option value="Squats"> Squats</option>
                <option value="Deadlifts"> Deadlifts</option>
                <option value="CalfRaise"> Calf Raises</option>
                <option value="SplitSquat"> Split Squats</option>
                <option value="RevLunges"> Reverse Lunges</option>
                <option value="GluteBridge"> Glute Bridges</option>
            </select><br>
            <select name="exercises2" onchange="showLowWorkout(this.value)">
                <option value=""> Select your second exercise:</option>
                <option value="Squats"> Squats</option>
                <option value="Deadlifts"> Deadlifts</option>
                <option value="CalfRaise"> Calf Raises</option>
                <option value="SplitSquat"> Split Squats</option>
                <option value="RevLunges"> Reverse Lunges</option>
                <option value="GluteBridge"> Glute Bridges</option>
            </select><br>
            <select name="exercises3" onchange="showLowWorkout(this.value)">
                <option value=""> Select your third exercise:</option>
                <option value="Squats"> Squats</option>
                <option value="Deadlifts"> Deadlifts</option>
                <option value="CalfRaise"> Calf Raises</option>
                <option value="SplitSquat"> Split Squats</option>
                <option value="RevLunges"> Reverse Lunges</option>
                <option value="GluteBridge"> Glute Bridges</option>
            </select><br>
            <select name="exercises4" onchange="showLowWorkout(this.value)">
                <option value=""> Select your fourth exercise:</option>
                <option value="Squats"> Squats</option>
                <option value="Deadlifts"> Deadlifts</option>
                <option value="CalfRaise"> Calf Raises</option>
                <option value="SplitSquat"> Split Squats</option>
                <option value="RevLunges"> Reverse Lunges</option>
                <option value="GluteBridge"> Glute Bridges</option>
            </select><br>
        </div>
        <div id="workout">
            <h2><strong>Today's Workout</strong></h2>
            <div id="workoutReveal"></div>
        </div>
        <script src="Javascript/Script.js"></script>
    </body>
</html>