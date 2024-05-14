<?php
	$username = @$_POST["username"];
	$name = @$_POST["name"];
	$email = @$_POST["email"];
	$gender = @$_POST["gender"];
	$phone = @$_POST["phone"];
	$address = @$_POST["address"];
	$college = @$_POST["college"];
	$password = @$_POST["password"];
	
	$info = @$_POST["info"];
	if ($info != 'Yes') {
		$info = 'No';
	}
	
	$con = mysqli_connect("localhost", "root", "", "unitenclub");
	
	
	$ins="INSERT INTO usertb (Username, Name, Email, Gender, Phone, Address, College, Password, Info)
	VALUES('".$username."','".$name."','".$email."','".$gender."','".$phone."','".$address."','".$college."','".$password."','".$info."')";

	mysqli_query($con,$ins) or die ('Error insert query'. mysqli_error($con));
	
	echo "<h2>Successful! ".$username." has been added. Redirecting you to Main Page.</h2>";
	
	header('Refresh: 2; URL=index.html');
?>

<BR><h4>Redirecting to Main Page</h4>
</body>
</html>
