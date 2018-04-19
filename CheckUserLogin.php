<script>
function myFunc()
	{
		alert("Please Fill All The Blanks.");
		window.location="index.php";
	}
</script>

<?php
    include_once("dbconnect.php");
    $db = new Database();
    $db->connect();

    $tbl_name="user_login";

    $myusername=$_POST['uname'];
    $mypassword=$_POST['pwd'];

    if($myusername!="" && $mypassword!="")
    {
    $sql="SELECT * FROM $tbl_name WHERE uname='$myusername' and pwd='$mypassword'";
    $res=$db->selectData($sql);
    $count=mysqli_num_rows($res);
    if($count==1)
    {
      $row=mysqli_fetch_row($res);
      session_start();
      $_SESSION['Sname']=$row[1];

      if (isset($_POST['remuser'])){
        setcookie("UName",$myusername,time()+60*60*24);
        setcookie("Pwd",$mypassword,time()+60*60*24);
      }
      else
      {
        setcookie("UName","",time()-5);
        setcookie("Pwd","",time()-5);
      }
      header("location:home.php");
    }
    else {
      header("location:index.php");
    }
  }
  else
  {
      echo "<script type='text/javascript'>myFunc()</script>";
  }
?>
