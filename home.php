<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
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
  <a class="navbar-brand" href="#"><img width="10%;" src="logo.png"></a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="fiction.php">Fiction</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="nfiction.php">Non Fiction</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      <li class="nav-item" style="margin-left: 420px">
        <a class="nav-link disabled" href="home.php">Logged in as: <?php echo $_SESSION['Sname']; ?></a></li></a>
      </li>

    </ul>
  </div>
</nav>

<div class="content">
	<h2 style="padding-bottom: 20px; text-align:center;font-family: 'Montserrat', sans-serif;" >SRM LIBRARY</h2>
	<img width="100%" src="ub.jpg"><br>
	<h5 style="padding: 20px; color: black; text-align:center"><i>University Building, SRM Institute of Science & Technology</i></h5>
    <p align="justify" style="font-family:'Slabo 27px', serif; font-size: 1.2em">
    	SRM University has an excellent library for the benefit of students, faculties and researchers. As one of the best established libraries according to International Standards, the University Library has a large collection of books covering various branches of Engineering and Technology, Medical and Health Sciences and Science and Humanities and its related fields.
	</p>
	
	<hr>
	
	<div class="par">
		<p>The library is located in the 15-Storey University Administrative Block, and is spread over Ground + 3 floors of 1.50 Lakh sq ft area. The library building is
			<ul>
				<li>
					Fully air-conditioned and automated with RFID (Radio Frequency Identification) technology
				</li>
				<li>
					Well protected with fire alarms and CCTV security systems
				</li>
				<li>
					Equipped with reading halls in all the floors, with reference collection
				</li>
			</ul>
		</p>
	</div>

</div>

<br><br>

</body>
</html>
