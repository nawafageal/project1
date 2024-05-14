<?php 
$con = mysqli_connect("localhost", "root", "", "unitenclub");
	
$del = "delete from usertb where username='{$_GET['chk']}'";

mysqli_query($con,$del) or die ('Error');

echo "<h2>Successful! Record has been deleted.</h2>";

header('Refresh: 2; URL=admin.php');
?>