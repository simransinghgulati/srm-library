<script>
function myFunc()
	{
		alert("Registration Successful.");
		window.location="index.php";
	}
  </script>
<?php
	extract($_POST);
	$mysqli = new mysqli('localhost', 'root','', 'db_srm_library');

	if($mysqli->connect_errno > 0){
   		die('Unable to connect to database [' . $db->connect_error . ']');
	}

	$dob=$dd.'/'.$mm.'/'.$yy;

	$query = "INSERT INTO user_login VALUES
('$regno','$uname','$pwd','$gender','$dob','$dept','$email','$mobile')";

	$insert_row = $mysqli->query($query);

	if($insert_row){
		  echo "<script type='text/javascript'>myFunc()</script>";
	}
	else{
   		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
     ?>
