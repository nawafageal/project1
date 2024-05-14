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



<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>User profile</title>
    <!-- BOOTSTRAP STYLE SHEET -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT-AWESOME STYLE SHEET FOR BEAUTIFUL ICONS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- CUSTOM STYLE CSS -->
    <style type="text/css">
               .btn-social {
            color: white;
            opacity: 0.8;
        }

            .btn-social:hover {
                color: white;
                opacity: 1;
                text-decoration: none;
            }

        .btn-facebook {
            background-color: #3b5998;
        }

        .btn-twitter {
            background-color: #00aced;
        }

        .btn-linkedin {
            background-color: #0e76a8;
        }

        .btn-google {
            background-color: #c32f10;
        }
    </style>
</head>
<body>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Uniten Club</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav ">
                  <li><a href="index.html">HOME</a></li>
                 
                     <li><a href="logout.php">Logout</a></li>
                    
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR CODE END -->


    <div class="container">
        <section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
                <div class="alert alert-info">
                        <h2><?php echo $row[1];?></h2>
                        
                        <p>
                           Welcome to your profile, you can edit your details here...
                        </p>
                    </div>
               
                    
                <div class="col-md-4">
                    <img src="assets/img/250x250.png" class="img-rounded img-responsive" />
                    <br />
                    <br />
                    
                </div>
                <div class="col-md-8">
                   
                    <div>
                        <a href="#" class="btn btn-social btn-facebook">
                            <i class="fa fa-user"></i>&nbsp; YOU HAVE ALREADY REGISTERED FOR THE EVENT</a>
                        
                    </div>
                    <br/>
                    <form method="post" action="update.php" >
                    <div class="form-group col-md-8">
                      <label>Registered Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $row[0];?>" disabled >
                  <br>  <label>Registered Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row[1];?>">
                  <br>  <label>Registered Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $row[2];?>"><br>

                        <label>Gender:</label> <br>
                       
                    <input type="text" name="gender" class="form-control" value="<?php echo $row[3];?>"><br>
                        
                 <label>Phone</label>
                        <input type="text" class="form-control" name="phone"  value="<?php echo $row[4];?>" required/>
                        <a href="#" class="icon ticker"> </a>
                        <div class="clear"> </div><br>
                  <label>  Address:</label>
                        <textarea class="form-control" name ="address" rows ="3" cols="50"  required/>
                        <?php echo $row[5];?>
                        </textarea>
                    <br>
                      <label>College:</label> <br>
                    <input type="text" name="college" class="form-control" value="<?php echo $row[6];?>"><br><br>
                 <label>Password</label>
                        <input type="password" class="form-control"  name="password" value="<?php echo $row[7];?>" required/>
                      <br>
                  
                    <label class="checkbox"><input type="checkbox" name="inform" checked="" name="information" value="Yes"><i> </i>inform me of upcoming  programs</label>
                  
                </ul>
            </form>
                    <br>
                    <input type="submit" value="Update" name="submit" class="btn btn-success">
                    <br /><br/>
                    </div>
                </div>
            </div>
            <!-- ROW END -->


        </section>
        <!-- SECTION END -->
    </div>
    <!-- CONATINER END -->

    <!-- REQUIRED SCRIPTS FILES -->
    <!-- CORE JQUERY FILE -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- REQUIRED BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
  <?php //put right before close </body> tag
}
else{
 echo "No session exist or session is expired. Please log in again";
 header('Refresh: 3; URL=login.html');

}

?> 
</body>

</html>
