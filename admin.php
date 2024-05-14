<?php 
session_start();
$user=$_SESSION["user"];

$con = mysqli_connect("localhost", "root", "", "unitenclub");


$ret = "SELECT * FROM usertb WHERE username='".$user."'";
$ret_result = mysqli_query($con,$ret) or die ('Error');
$row=mysqli_fetch_array($ret_result );

if(isset ($user))
{
?> 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          UNITEN CLUB
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
           <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="material-icons">home</i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="admin.php">
              <i class="material-icons">content_paste</i>
              <p>User List</p>
            </a>
          </li>
        
          <li class="nav-item ">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">exit_to_app</i>
              <p>Logout</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Registered Users List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form" method="post" action="adminsearch.php">
              <div class="input-group no-border">
                <input type="text" name="search" class="form-control" placeholder="Search...">
                <button type="submit" name="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.html">
                  <i class="material-icons">home</i>
                  <p class="d-lg-none d-md-block">
                    Home
                  </p>
                </a>
              </li>
              <a class="nav-link" href="logout.php">
                  <i class="material-icons">exit_to_app</i>
                  <p class="d-lg-none d-md-block">
                   Logout
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Registered Users</h4>
                  <p class="card-category"> Here is the lis of registerd users for the event</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                       
                        <th>
                          Username
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                         Email
                        </th>
                        <th>
                          Gender
                        </th>
                         <th>
                          College
                        </th>
                         <th>
                          Address
                        </th>
                         <th>
                          Phone
                        </th>
                         <th>
                          Edit
                        </th>
                        <th>
                          Delete
                        </th>
                      </thead>
                      <tbody>
                       <?php 
 
$con = mysqli_connect("localhost", "root","","unitenclub");
  

  //display all user data except admin'
$res=mysqli_query($con,"SELECT * FROM usertb WHERE NOT username ='admin'");
while(list($username,$name,$email,$gender,$phone,$address,$college,$password,$info)=mysqli_fetch_array($res))
{
 //creating tables for all records
echo "<tr>";    
echo "<td>".$username."</td>";
echo "<td>".$name."</td>";
echo "<td>".$email."</td>";
echo "<td>".$gender."</td>";
echo "<td>".$college."</td>";
echo "<td>".$address."</td>";
echo "<td>".$phone."</td>";


// add delete button for each record
echo "<td><a href='adminupdate.php?chk=$email'><img src='assets/img/dit.png' height='30' width='60'></a></td>";
echo "<td><a href='admindelete.php?chk=$username'><img src='assets/img/del.png' height='30' width='60'></a></td>";
echo "</tr>";    
 
}
 
?>
                         

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <?php //put right before close </body> tag
}
else{
 echo "No session exist or session is expired. Please log in again";
 header('Refresh: 3; URL=login.html');

}

?> 
</body>

</html>