
<?php
	$con = mysqli_connect("localhost", "root", "", "unitenclub") or die ("Cannot connect to server." .mysqli_error($con));
	
	session_start();
	$username=$_POST["username"];
	$name = $_POST["name"];
	$email = $_POST["email1"];
	$gender = $_POST["gender"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$college = $_POST["college"];
	$password = $_POST["password"];

    $update_sql="UPDATE usertb SET password ='$password', name='$name', username = '$username', phone = '$phone',  gender = '$gender', address = '$address', college = '$college' WHERE email = '$email'";
    $sql_result=mysqli_query($con,$update_sql);
	
    if($sql_result)
	{
		echo "<h2>Successful! Record has been updated.</h2>";
		header('Refresh: 2; URL=admin.php');
	}
	else
	{
		echo "Error in updating the data";
	}


?>