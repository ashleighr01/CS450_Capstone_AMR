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
        <div id="workoutSelection">
            <h1><strong>Select your Focus</strong></h1><br>
            <p>You will have two options on what you  want to focus on today. Please choose upper or lower body exercises.<br>
        Once you select a focus, you will be taken to a page with exercises for your day.<br><br>
        If you need to start over, click "Exercises" on the top bar.</p>
            <form id="select" onclick="nextPage()" >
                Are you training upper (arms, back, & chest) or lower (legs, hips, & glutes) body?<br><br> 
                <input type="radio" id = "upper" name="body" value="upper"> Upper <input type="radio" id = "lower" name="body" value="lower"> Lower<br>
            </form>
        </div>
        <script src="Javascript/Script.js"></script>
    </body>
</html>