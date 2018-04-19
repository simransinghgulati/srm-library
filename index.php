<!DOCTYPE html>
<html lang="en">

<head>
   <title>SRM IST</title>
   <link rel="stylesheet" href="style.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  
 </head>

<body>
<div class="container">
  <div>
      <div>
         <h1 class="heading">SRM ONLINE LIBRARY</h1>
		</div>

      <div class="content">

        <img src="logo.png" align="left" style="width: 15%; padding-right: 30px; padding-top: 10px;">

        <p class="par">
        As one of the best established libraries according to International Standards, the University Library has a large collection of books covering various branches of Engineering and Technology, Medical and Health Sciences and Science and Humanities and its related fields.
        </p>
            
            <form id="form1" action="CheckUserLogin.php" method="POST" class="par">
      				<table valign="center" border="0"   cellpadding="4" cellspacing="2">
      					<tr>
                        <td>
                           <b>Username</b></td>
                           <td><input type="text" name="uname" value=<?php echo Cookie_val(1)?>>
                           </td>
                     </tr>
      					<tr>
                        <td>
                           <b>Password</b></td><td><input type="password" name="pwd" value=<?php echo Cookie_val(2)?>>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <input type="checkbox" name="remuser"><small>Remember</small>
                        </td>
                     </tr>
      				</table>
            </form>

        		<button class="button" style="margin-left: 130px; margin-right: 10px;" type="submit" form="form1">
               <span>LOGIN</span>
            </button>

            <button class="button">
               <a type="button" href="NewUser.html"><span>SIGN UP</span></a>
            </button>

      </div>

</div>
</div>
</body>

<!-- cookie -->
<?php
		function Cookie_val($ch){
		if ($ch==1)
		{
			if (isset($_COOKIE['UName']))
			{
				return $_COOKIE['UName'];
			}
			else
				return;
		}
		else
		{
			if (isset($_COOKIE['Pwd']))
			{
				return $_COOKIE['Pwd'];
			}
			else
				return;
		}
		}
	?>

</html>
