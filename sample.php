<!DOCTYPE html>

<?php
  
   include 'partials/_dbconnect.php'; 
   session_start();
   $Email = $_SESSION['email'];

  if (isset($_POST['save'])) {
  $result = mysqli_query($conn,"SELECT * FROM `customer` WHERE `email` = '$Email'");
  $row = mysqli_fetch_array($result);
  	 // Get image name
  	 $Profile_image = $_FILES['profile']['name'];

     if($Profile_image == null)
     {
        $Profile_image = $row['Profile_image'];
	 }

     $First_Name = $_POST['first_name'];
     $Last_Name = $_POST['last_name'];
  	 // image file directory
  	 $target = "profile/".basename($Profile_image);
 
  	 $sql = "UPDATE `customer` SET `F_name`= '$First_Name' ,`L_name`= '$Last_Name', `Profile_image`= '$Profile_image' WHERE `email` = '$Email'";
  	 // execute query
  	 $result = mysqli_query($conn, $sql);
    
  	 if($result)
     {
        if (move_uploaded_file($_FILES['profile']['tmp_name'], $target)) 
        {
  		    $msg = "Image uploaded successfully";
  	    }
        else
        {
  		    $msg = "Failed to upload image";
  	    } 
     }
  }
  $result = mysqli_query($conn,"SELECT * FROM `customer` WHERE `email` = '$Email'");
  $row = mysqli_fetch_array($result);
?>

<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link  rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  
</head>

<body>

	<?php require 'partials/_navbarhome.php';

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}
?>

<h1 class="text-center"><b> Your Profile</b></h1>

<form method="POST" action="Profile.php"  enctype="multipart/form-data">
    <div class="container bootstrap snippet">
            
                <div class="row">
  		            <div class="col-sm-3"><!--left col-->

                        <div class="text-center">
                            <?php echo '<img class="img-circle img-responsive" id="output" src="profile/'.$row['Profile_image'].'" width="200" height="200" alt="avatar"/> '?>
                            <h6>Upload your photo here...</h6>
                            <input  onchange="LoadFile(event)" type="file" name="profile">
                        </div> <br>
                        <ul class="list-group">
                        <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Your Booking : </strong></span> 1</li>
                        <a href="Logout.php" class="list-group-item text-right"><span class="pull-left"><strong>Logout</strong></span></a>
                        </ul> 
               
                    </div><!--right col-->
    	            <div class="col-sm-9">
              
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                            <hr>
                                <div class="form-group">
                          
                                <div class="col-xs-6">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" onchange="enableit()" value="<?php echo $row['F_name'] ?>" class="form-control" name="first_name" id="first_name" placeholder="first name" title="Enter your First name.">
                                    </div>
                                </div>
                                <div class="form-group">
                          
                                    <div class="col-xs-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                    <input type="text" onchange="enableit()" value="<?php echo $row['L_name'] ?>" class="form-control" name="last_name" id="last_name" placeholder="last name" title="Enter your Last name." >
                                    </div>
                                </div>
          
                                <div class="form-group">
                          
                                    <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="text" value="<?php echo "+91".$row['p_no'] ?>"class="form-control" name="phone" id="phone" placeholder="phone" title="Your phone number." disabled>
                                    </div>
                                </div>

                                <div class="form-group">
                          
                                    <div class="col-xs-6">
                                    <label for="phone"><h4>Gender</h4></label>
                                    <input type="text" value="<?php echo $row['gender'] ?>"class="form-control" name="gender" id="gender" placeholder="gender" title="Your Gender." disabled>
                                    </div>
                                </div>

                                <div class="form-group">
                          
                                    <div class="col-xs-6">
                                    <label for="phone"><h4>DOB</h4></label>
                                    <input type="text" value="<?php echo $row['dob'] ?>"class="form-control" name="dob" id="dob" placeholder="dob" title="Your DOB." disabled>
                                    </div>
                                </div>
         
                                <div class="form-group">
                          
                                    <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" value="<?php echo $row['email'] ?>" name="email" id="email" placeholder="you@gmail.com"  disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                    <br>
                              	    <button class="btn btn-lg btn-success" id="save" type="submit" name="save" disabled><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                    </div>
                                </div>
                                </hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
function enableit()
{
    document.getElementById("save").disabled = false;
}
</script>
</script>
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
    enableit();
};
</script>

</body>
</html>