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
        <div id="information">
            <h1><strong>Build Your Program</strong></h1>
            <form action="PHP/includes/update.inc.php" method="post">
                Team Name: <input type="text" name="team"><br>
                What's your team's goal? <input type="radio" id = "bulk" name="goal" value="bulk"> Bulk <input type="radio" id="lean" name="goal" value="lean"> Lean <input type="radio" id="main" name="goal" value="main"> Maintain <br>
                What intensity are these workouts at? <input type="radio" id = "high" name="intensity" value="high"> High Intensity <input type="radio" id="low" name="intensity" value="low"> Low Impact/Steady State <br>
                <button type="submit" name="submit">Update</button>
            </form>
        </div>
    </body>
</html>