<?php session_start(); ?>
<!DOCTYPE html>
<htm lang="en">
<head>
   <title>SRM IST</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
 </head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img width="10%" src="logo.png"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="fiction.php">Fiction</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="nfiction.php">Non Fiction</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" href="home.php">Logged in as: <?php echo $_SESSION['Sname']; ?></a></li></a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0" action="searchf.php" method="GET">
        <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="content">

  	<h2 style="padding: 25px; text-align:center;font-family: 'Montserrat', sans-serif">FICTION</h2>
    <p align="justify" style="font-family: 'Slabo 27px', serif;">
      A work of fiction is an act of creative imagination, so its total faithfulness to the real-world is not typically assumed by its audience. Therefore, fiction is not commonly expected to present only characters who are actual people or descriptions that are factually accurate. Instead, the context of fiction, not adhering precisely to the real world, is generally understood as being more open to interpretation. Characters and events within a fictional work may even be set in their own context entirely separate from the known universe: an independent fictional universe. Fiction is regarded as the traditional opposite of non-fiction, whose creators assume responsibility for presenting only the historical and factual truth; however, the distinction between fiction and non-fiction can be unclear, for example, in postmodern literature.
    </p>
  </div>
</body>
</html>
