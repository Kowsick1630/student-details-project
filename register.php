<?php
include("con1.php");
?>
<html>

     <head>

     <script type="text/javascript" src="validate.js"></script>

     </head>

     <body>

     <form method="post" action="register.php">

     <table cellpadding="2" width="20%" bgcolor="99FFFF" align="center"
      cellspacing="2">


     <tr>

     <td colspan=2>

     <center><font size=4><b>Student Registration Form</b></font></center>

     </td>

     </tr>


     <tr>

     <td>Name</td>

     <td><input type="text" name="textname" id="textname" size="30">

     </td>

     </tr>


     <tr>

     <td>Father Name</td>

     <td><input type="text" name="fathername" id="fathername"
      size="30"></td>

     </tr>

     <tr>

     <td>Postal Address</td>

     <td><input type="text" name="paddress" id="paddress" size="30">

     </td>

     </tr>


     <tr>

     <td>Personal Address</td>

     <td><input type="text" name="personaladdress" id="personaladdress" size="30">

     </td>

     </tr>

    


     <tr>

     <td>City</td>

     <td><select name="City">

     <option value="---" selected>select..</option>

     <option value="New Delhi">NEW DELHI</option>

     <option value="Mumbai">MUMBAI</option>

     <option value="Goa">GOA</option>

     <option value="Patna">PATNA</option>


     </select>

     </td>

     </tr>


     <tr>

     <td>Course</td>

     <td><select name="Course">

     <option value="--" selected>select..</option>

     <option value="B.Tech">B.TECH</option>

     <option value="MCA">MCA</option>

     <option value="MBA">MBA</option>

     <option value="BCA">BCA</option>

     </select>

     </td>

     </tr>


     <tr>

     <td>District</td>


     <td><select name="District">

     <option value="---" selected>select..</option>

     <option value="Nalanda">SALEM</option>

     <option value="UP">CHENNAI</option>

     <option value="Goa">COIMBARORE</option>

     <option value="Patna">MADURAI</option>

     </select>

     </td>

     </tr>


     <tr>

     <td>State</td>

     <td><select Name="State">

     <option value="--" selected>select..</option>

     <option value="New Delhi">NEW DELHI</option>

     <option value="Mumbai">MUMBAI</option>

     <option value="Goa">GOA</option>


     <option value="Bihar">BIHAR</option>

     </select>

     </td>

     </tr>


     <tr>

     <td>PinCode</td>

     <td><input type="text" name="pincode" id="pincode" size="30"></td>

     </tr>


     <tr>

     <td>EmailId</td>

     <td><input type="text" name="emailid" id="emailid" size="30">

     </td>

     </tr>


     <tr>

     <td>DOB</td>


     <td><input type="text" name="dob" id="dob" size="30">

     </td>

     </tr>


     <tr>

     <td>MobileNo</td>

     <td><input type="text" name="mobileno" id="mobileno" size="30">

     </td>

     </td>

     </tr>	
     <tr>
	 <td><colspan="2"><input type="submit" value="Submit Form" name="submit"/></td>
	 </tr>	 

     </table>

     </form>
	 <?php
	 if(isset($_POST["submit"]))
	 {
		 $n1=$_POST["textname"];
		 $n2=$_POST["fathername"];
		 $n3=$_POST["paddress"];
		 $n4=$_POST["personaladdress"];
		 $n6=$_POST["City"];
		 $n7=$_POST["Course"];
		 $n8=$_POST["District"];
		 $n9=$_POST["State"];
		 $n10=$_POST["pincode"];
		 $n11=$_POST["emailid"];
		 $n12=$_POST["dob"];
		 $n13=$_POST["mobileno"];
		 $sql="INSERT INTO studentdeatials VALUES('$n1','$n2','$n3','$n4','$n6','$n7','$n8','$n9','$n10','$n11','$n12','$n13')";
		 if($con->query($sql))
		 {
			 echo "<script>alert('SAVED SUCCESSFULLY')</script>";
		 }
	 }
	 ?>

     </body>
0
     </html>
