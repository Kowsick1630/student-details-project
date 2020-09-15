<?php
session_start();
if(!isset($_SESSION['NN']))
{
	header("location:login.php");
}
include("con1.php");
?>
<!DOCTYPE html>

<html>
<head>
<title>admin</title>
</head>
<body>
<center><h3><font color="blue">REGISTRATION Deatials</font></h3></center>
<table align="center" border="1"><tr style="background-color:blue;"><th>NAME</th><th>FATHER NAME</th><th>POSTAL ADDRESS</th><th>PERMANENT ADDRESS</th><th>CITY</th><td>COURSE</td><td>DISTRICT</td><td>STATE</td><td>PINCODE</td><td>EMAIL ID</td><td>DATE OF BIRTH</td><td>MOBILE NUMBER</td></tr>
<?php
$sql="SELECT * FROM studentdeatials;";
		$result=$con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr><td> ". 
		$row["NAME"]. "</td><td>". 
		$row["FATHERNAME"]. "</td><td>" . 
		$row["POADDRESS"] . "</td><td>". 
		$row["PEADDRESS"]."</td><td>". 
		$row["CITY"]."</td><td>".
        $row["COURSE"]."</td><td>".  
        $row["DISTRICT"]."</td><td>". 
        $row["STATE"]."</td><td>".
        $row["PINCODE"]."</td><td>".
        $row["EMAILID"]."</td><td>".
        $row["DOB"]."</td><td>".		
		$row["MOBILENO"]."</td></tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
</body>
</html>