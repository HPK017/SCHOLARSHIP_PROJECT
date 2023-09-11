<!doctype html>
<html lang="en">
<?php include 'partials/_dbconnect.php';?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Gradplus</title>
</head>

<body>
    <?php include 'partials/_header.php';?>

    <?php
   $Email = $_SESSION['studentemail'];

  if (isset($_POST['save'])) {
  $result = mysqli_query($conn,"SELECT * FROM `students` WHERE `student_email` = '$Email'");
  $row = mysqli_fetch_array($result);
  	 // Get image name
  	 $Profile_image = $_FILES['profile']['name'];

     if($Profile_image == null)
     {
        $Profile_image = $row['Profile_image'];
	 }

     $First_Name = $_POST['first_name'];
     $Last_Name = $_POST['last_name'];
     $Phone_No = $_POST['phone'];
     $Date_of_Birth = $_POST['dob'];
  	 // image file directory
  	 $target = "images/".basename($Profile_image);
 
  	 $sql = "UPDATE `students` SET `F_name`= '$First_Name' ,`L_name`= '$Last_Name',`p_no`= '$Phone_No',`dob`= '$Date_of_Birth', `Profile_image`= '$Profile_image' WHERE `student_email` = '$Email'";
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
  $result = mysqli_query($conn,"SELECT * FROM `students` WHERE `student_email` = '$Email'");
  $row = mysqli_fetch_array($result);
?>



    <?php 
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
        {
            header("location: index.php");
            exit;
        }
?>

    <h2 class="text-center heading my-4"> My Profile</h2>

    <div class="container bootstrap snippet">

        <!--right col-->
        <div class="">

            <div class="tab-content my-0">
                <div class="tab-pane active" id="home">

                    <div class="container my-0 container-form shadow p-3 mb-5 bg-white rounded">
                    <form method="POST" action="profile.php" enctype="multipart/form-data">


                        <div class="text-center">
                            <?php echo '<img class="img-circle img-responsive" style="border-radius:100px;" id="output" src="images/'.$row['Profile_image'].'" width="150" height="150" alt="avatar"/> '?>
                            <h6>Upload your Profile Photo</h6>
                            <input onchange="LoadFile(event)" type="file" name="profile">
                        </div> <br>


                        <ul class="list-group mb-4">
                            <!-- <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li> -->
                            <span class="text-right"><strong
                                    class="shadow p-3 mb-5 bg-dark rounded"><a href="recentlyApplied.php" class="font-weight-bold" style="text-decoration: none; color: white;">Recently Applied Scholardips</a>
                                </strong>
                                
                            </span>
                        </ul>


                            <div class="form-group">

                                <div class="col-xs-6 heading-no-text-no-hover">
                                    <label for="first_name">
                                        <h5>First name</h5>
                                    </label>
                                    <input type="text" onchange="enableit()" value="<?php echo $row['F_name'] ?>"
                                        class="input heading shadow-sm bg-white rounded my-0" name="first_name"
                                        id="first_name" placeholder="first name" title="Enter your First name.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6 heading-no-text-no-hover">
                                    <label for="last_name">
                                        <h5>Last name</h5>
                                    </label>
                                    <input type="text" onchange="enableit()" value="<?php echo $row['L_name'] ?>"
                                        class="input heading shadow-sm bg-white rounded" name="last_name" id="last_name"
                                        placeholder="last name" title="Enter your Last name.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6 heading-no-text-no-hover">
                                    <label for="phone">
                                        <h5>Phone</h5>
                                    </label>
                                    <input type="text" value="<?php echo "+91".$row['p_no'] ?>"
                                        class="input heading shadow-sm bg-white rounded" name="phone" id="phone"
                                        placeholder="phone" title="Your phone number.">
                                </div>
                            </div>


                            <div class="form-group">

                                <div class="col-xs-6 heading-no-text-no-hover">
                                    <label for="dob">
                                        <h5>DOB</h5>
                                    </label>
                                    <input type="text" value="<?php echo $row['dob'] ?>"
                                        class="input heading shadow-sm bg-white rounded" name="dob" id="dob"
                                        placeholder="dob" title="Your DOB.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6 heading-no-text-no-hover">
                                    <label for="student_email">
                                        <h5>Email</h5>
                                    </label>
                                    <input type="email" class="input heading shadow-sm bg-white rounded"
                                        value="<?php echo $row['student_email'] ?>" name="student_email"
                                        id="student_email" placeholder="you@gmail.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn heading" id="save" type="submit" name="save"><i
                                            class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn heading" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                        Reset</button>
                                </div>
                                <ul class="list-group">
                                    <span class="text-right heading"><a href="partials/_logout.php"
                                            class="btn my-0 shadow-sm text">Logout</a></span>
                                </ul>
                            </div>
                            </hr>
                    </div>

                </div>
            </div>
        </div>



    </div>


    </div>
    <!-- </div>  -->
    <!-- for shadow -->




    </form>


    </div>
    <script>
    function enableit() {
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



    <?php include 'partials/_footer.php';?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>