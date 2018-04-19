<?php
   $con = mysqli_connect('localhost', 'root', '','db_srm_library') or die("Error connecting to database: ".mysqli_error());
   mysqli_select_db($con,'db_srm_library') or die(mysqli_error($con));
    $query = $_GET['search'];
    $type="nfiction";
    $min_length = 3;


    if(strlen($query) >= $min_length){

        $query = htmlspecialchars($query);


        $query = mysqli_real_escape_string($con,$query);


        $raw_results = mysqli_query($con,"SELECT * FROM book
            WHERE ((`title` LIKE '%".$query."%') OR (`author` LIKE '%".$query."%')) and type='$type'") or die(mysqli_error($con));

        if(mysqli_num_rows($raw_results) > 0){
            while($results = mysqli_fetch_array($raw_results)){


              echo "<p><h3>".$results['title']."</h3>".$results['author']."<br>"."<p>".$results['descr']."</p></p>";

            }

        }
        else{
            echo "No results";
        }

    }
    else{
        echo "Minimum length is ".$min_length;
    }
?>
