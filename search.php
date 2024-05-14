<html>
<body>
<?php
 echo "<table border='1'><tr>
 <td>Customer ID</td>
 <td>Customer Name</td>
 <td>Customer Address</td>
 </tr>";
$con=mysqli_connect("localhost", "root", "","unitenclub") or die("Cannot connect to server.".mysqli_error($con));
 $idCustomer="darshini";
 $name="444444444";
 $address="444444444";

 $sql="SELECT * FROM usertb WHERE username LIKE '%$idCustomer%' OR name LIKE '%$idCustomer%' OR phone LIKE '%$idCustomer%' ";

 $result=mysqli_query($con,$sql) or die("Cannot execute sql.");
 while($row=mysqli_fetch_array($result,MYSQL_NUM))
 {
 $idCustomer=$row[0];
 $name=$row[2];
 $address=$row[3];

 echo "<tr>
 <td>$idCustomer</td>
 <td>$name</td>
 <td>$address</td>
 </tr>";
 }
 echo "</table>";
?>
</body>
</html>