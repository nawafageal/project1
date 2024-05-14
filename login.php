<html>
<head>
<title>Login</title>
</head>

<body>
<?php

	$username = $_POST["username"];
	$pass = $_POST["password"];
	
	$con = mysqli_connect("localhost", "root", "", "unitenclub");
	
	
	$sql=mysqli_query($con,"SELECT * FROM usertb WHERE username='".$username."'");
	
	if(mysqli_num_rows($sql)== 0)
	    echo "Username does not exist! Redirrecting...";
		header('Refresh: 3; URL=Login.html');
	
	        $row=mysqli_fetch_array($sql,MYSQLI_BOTH);
			
	        if($row["password"] == $pass && $row["username"] == "admin")//for ADMIN
			{
				session_start();
				$_SESSION["user"] = $username;
				echo "<h2>Successful! Welcome ".$username."!</h2>";
				header('Refresh: 3; URL=admin.php');
			}
			else if($row["password"] == $pass && $row["username"] !="admin") //FOR USER
			{
				session_start();
				$_SESSION["user"]= $username;
				//go to edituser.php
				echo "<h2>Successful! Welcome ".$username."!</h2>";
				header('Refresh: 3; URL=user.php');
			} 
			
			else
				echo "Password wrong";
			
?>
</body>
</html>