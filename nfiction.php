<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head lang="en">
   <title>SRM IST</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
 </head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img width="10%;" src="logo.png"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="fiction.php">Fiction</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="nfiction.php">Non Fiction</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" href="home.php">Logged in as: <?php echo $_SESSION['Sname']; ?></a></li></a>
        </li>

      </ul>

      <form class="form-inline my-2 my-lg-0" action="searchnf.php" method="GET">
        <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="content">
    <h2 style="padding: 25px; text-align:center;font-family: 'Montserrat', sans-serif">NON FICTION</h2>
    <p align="justify" style="font-family: 'Slabo 27px', serif;">
      Non-fiction or nonfiction is content (sometimes, in the form of a story) whose creator, in good faith, assumes responsibility for the truth or accuracy of the events, people, or information presented. In contrast, a story whose creator explicitly leaves open if and how the work refers to reality is usually classified as fiction. Nonfiction, which may be presented either objectively or subjectively, is traditionally one of the two main divisions of narratives (and, specifically, prose writing), the other traditional division being fiction, which contrasts with nonfiction by dealing in information, events, and characters expected to be partly or largely imaginary.
    </p>
  </div>

</body>
</html>
