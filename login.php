<?php
session_start();
include("con1.php");
?>
<!DOCTYPE html>

<html>

    <head>

    <title>Login Page

    </title>

    </head>

     <body>

    <form name="loginForm" method="post" action="login.php">

    <table width="20%" bgcolor="0099CC" align="center">

     <tr>

     <td colspan=2><center><font size=4><b>HTML Login Page</b></font></center>

     </td>

     </tr>
  
     <tr>

     <td>Username:</td>  

     <td><input type="text" name="userid" required></td> 

    
     </tr>


     <tr>

     <td>Password:</td> 

     <td><input type="Password" name="pwd" required></td>

     </tr>


     <tr>

     <td ><input type="Reset"></td>

     <td><input type="submit" name="submit" value="submit">

     </td>

     </tr>

     </table>

     </form>


     <?php 
	 if(isset($_POST["submit"]))
	 {
		 $n1=$_POST["userid"];
		 $n2=$_POST["pwd"];
	 $sql="SELECT * FROM admin WHERE US='$n1' AND PASS='$n2';";
		$result=$con->query($sql);
    if ($result->num_rows > 0) {
		$_SESSION["NN"]=$n1;
		header("location:admin.php");
		
	}
	 }
	 
	 ?>

        </body>

        </html>
















