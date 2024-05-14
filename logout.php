<html>

<body>
<?php
 
session_start();

if (isset ($_SESSION["user"])) // userid replace with according to variable $_SESSION[xxx] at login page 
{
      session_destroy();
      echo "You have successfully logged out.";
	  header('Refresh: 2; URL=login.html');
}
else
      echo " No session exists or session is expired. Please log in again";
  	header('Refresh: 2; URL=login.html');
?>

</body>
</html>