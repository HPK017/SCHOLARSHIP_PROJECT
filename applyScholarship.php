<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> -->


    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

    <link rel="stylesheet" href="./style.css">
    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
    .container-form {
        background-color: #fffff;
        border-radius: 20px;
    }
    </style>
</head>

<body>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
Edit Modal
</button> -->

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLable" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLable">Edit Changes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form aciton="/forum/profile.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="snoEdit" id="snoEdit" required>

                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="emailEdit" name="emailEdit" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phoneEdit" name="phoneEdit" required>
                        </div>

                    </div>
                    <div class="modal-footer d-block mr-auto">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <?php  
    $showAlert = false;
    $update = false;
    $delete = false;


    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){

        //Insert into thread db
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $scholarid = $_GET['scholarid'];
        $studentid = $_SESSION['studentemail'];

        $sql = "SELECT * from `students` WHERE `student_email`= '$studentid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $studentid = $row['sno'];

        // Get image name
        $image = $_FILES['image']['name'];
        // image file directory
        $target1 = "images/".basename($image);

        $image2 = $_FILES['image2']['name'];
        // image file directory
        $target2 = "images/".basename($image2);

        $image3 = $_FILES['image3']['name'];
        // image file directory
        $target3 = "images/".basename($image3);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target1)) 
        {
            if (move_uploaded_file($_FILES['image2']['tmp_name'], $target2))
            {
                if (move_uploaded_file($_FILES['image3']['tmp_name'], $target3)) 
                {
            $sql = "INSERT INTO `profile` (`first_name`, `last_name`, `dob`, `email`, `phone`, `city`, `state`,`proof1`,`proof2`,`proof3`, `profile_scholar_id`, `profile_stud_id`, `tstamp`) VALUES ('$first_name', '$last_name', '$dob', '$email', '$phone', '$city', '$state','$image','$image2','$image3', '$scholarid', '$studentid', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            $showAlert = true;
                }
            }
        }   

        
        // $profile_no = $_POST['profile_no'];
        
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! </strong>Your application will be conformed and Notified if eligible via Email, Thank you!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }
    }
    ?>





    <h2 class="text-center my-4 heading">Fill the form below</h2>
    <div class="container my-0 container-form shadow p-3 mb-5 bg-white rounded">


        <!-- Scholarship form Submission starts here -->

        <form aciton="/forum/applyScholarship.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 font-weight-bold heading-no-text-no-hover">
                <label for="first_name">First name</label>
                <input type="text" class="input heading shadow-sm bg-white rounded" id="first_name" name="first_name"
                    placeholder="Jane" required>
            </div>

            <div class="font-weight-bold heading-no-text-no-hover">
                <label for="last_name">Last name</label>
                <input type="text" class="input heading shadow-sm bg-white rounded" id="last_name" name="last_name"
                    placeholder="Doe" required>
            </div>

            <div class="font-weight-bold heading-no-text-no-hover my-3">
                <label for="dob" class="col-2 col-form-label">DOB</label>
                <div class="col-10">
                    <input class="input heading shadow-sm bg-white rounded" type="date" value="0000-00-00" id="dob"
                        name="dob" required>
                </div>
            </div>

            <div class="font-weight-bold heading-no-text-no-hover my-3">
                <label for="email">Email</label>
                <input type="text" class="input heading shadow-sm bg-white rounded" id="email" name="email"
                    placeholder="example@gmail.com" required>
            </div>

            <div class="font-weight-bold heading-no-text-no-hover">
                <label for="phone">Phone</label>
                <input type="text" class="input heading shadow-sm bg-white rounded" id="phone" name="phone"
                    placeholder="Valid phone number" required>
            </div>
            <br>
            <div class="font-weight-bold heading-no-text-no-hover">
                <label for="city">City</label>
                <input type="text" class="input heading shadow-sm bg-white rounded" id="city" name="city"
                    placeholder="Banglore" required>
            </div>
            <br>
            <div class="font-weight-bold heading-no-text-no-hover">
                <label for="state">State</label>
                <input type="text" class="input heading shadow-sm bg-white rounded" id="state" name="state"
                    placeholder="Karnataka" required>
            </div>
            <br>
            <br>


            <input type="hidden" name="size" value="1000000" class="form-control">
            <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1"> Academic Certificate</label>
                <input type="file" name="image" required>
            </div>

            <input type="hidden" name="size" value="1000000" class="form-control">
            <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1">ID Card</label>
                <input type="file" name="image2" required>
            </div>

            <input type="hidden" name="size" value="1000000" class="form-control">
            <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1">Aadhar Card</label>
                <input type="file" name="image3" required>
            </div>

            <button class="btn my-4 shadow-sm heading" type="submit">Apply Now</button>
        </form>
        <!-- Scholarship form Submission ends here -->
    </div>
















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
    <!-- <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
    <script>
    < /body> < /
    html >