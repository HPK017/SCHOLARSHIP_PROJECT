<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>Gradplus Admin</title>

</head>

<body>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
Edit Modal
</button> -->

    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
    <div style="height: 520px;" class="container d-flex justify-content-center align-items-center my-4 ">
        <button class="btn d-flex mx-4 justify-content-center align-items-center shadow text"
            style="height:100px;width:100px;" data-toggle="modal" data-target="#adminSignupModal" >SignUp</button>
        <button class="btn d-flex mx-4 justify-content-center align-items-center shadow text"
            style="height:100px;width:100px;" data-toggle="modal" data-target="#adminLoginModal">Login</button>
    </div>

    <?php  
    $showAlert = false;
    $accepts = false;
    $delete = false;

    if(isset($_GET['delete'])){
        $sno = $_GET['delete']; 
        $delete = true;
        $sql = "DELETE FROM `profile` WHERE `profile_no` = $sno";
        $result = mysqli_query($conn,$sql);
    }

      if($accepts){
            echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Success! </strong>Your form has been updated!
            <button type="button" class="close" data-dismiss="success" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }


      if($delete){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Success! </strong>Your form has been deleted.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }

    ?>

    <div class="container my-4">
<!-- for spacing -->
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
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</body>
</html>