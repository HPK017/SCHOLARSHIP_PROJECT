<!doctype html>
<html lang="en">
<?php include 'partials/_dbconnect.php';?>
<?php
    $id =  $_GET['scholarid'];
    $sql = "SELECT * FROM `scholarships` WHERE scholarship_id=$id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $scholarname = $row['scholarship_name'];
        $scholardesc = $row['scholarship_description'];
    }
    ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
    #ques {
        min-height: 350px;
    }
    </style>
    <title>Gradplus</title>
</head>

<body>
    <?php include 'partials/_header.php';?>
    <?php
    $id =  $_GET['scholarid'];
    $sql = "SELECT * FROM `scholarships` WHERE scholarship_id=$id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $scholarname = $row['scholarship_name'];
        $scholardesc = $row['scholarship_description'];

    }
    ?>

    <?php  
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        //Insert into feedback db
        $feedback_title = $_POST['title'];
        $feedback_desc = $_POST['desc'];

        $feedback_title = str_replace("<", "&lt;", $feedback_title);
        $feedback_title = str_replace(">", "&gt;", $feedback_title);

        $feedback_desc = str_replace("<", "&lt;", $feedback_desc);
        $feedback_desc = str_replace(">", "&gt;", $feedback_desc);

        $sno = $_POST['sno'];
        $sql = "INSERT INTO `feedbacks` (`feedback_title`, `feedback_desc`, `feedback_scholar_id`, `feedback_stud_id`, `timestamp`) VALUES ('$feedback_title', '$feedback_desc', '$id', '$sno', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;

        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! </strong>Your feedback has been added! Please wait for community to respond
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
    </div>';
        }
    }
    ?>
    <div class="container">
    <img src="img/slider-13.png" class="card-img-top" alt="image for this scholarship">
    </div>
    <!-- same photo for now -->

    <!-- Scholarship container starts here -->
    <div class="container my-4  shadow p-3 mb-5 bg-white rounded">
        <h1 class="heading my-3 text-center">Applying for <?php echo $scholarname; ?> Scholarship</h1>

        <p class="lead text-lite text-center"><?php echo $scholardesc; ?></p>

        <hr class="my-4">
        <p><span class="font-weight-bold"><?php echo $scholarname; ?>, Follow the steps below to apply for
                the fellowship:</span></p>
        <p><span class="font-weight-bold">Eligibility:</span><span> College students</span></p>
        <p><span class="font-weight-bold">Required Documents:</span><span> Academic Certificate, ID Card, Aadhar Card</p>
        <p><span class="font-weight-bold">Step 1:</span><span> Fill your valid details below</span></p>
        <p><span class="font-weight-bold">Step 2:</span><span> Submit the required documents mentioned</span></p>
        <p><span class="font-weight-bold">Step 3:</span><span> Click on the Apply Now button</span></p>
        </p>
        <a class="btn shadow-sm heading" data-toggle="collapse" href="#collapseExample" href="#" role="button"
            aria-expanded="false" aria-controls="collapseExample">Having trouble?</a>

        <div class="collapse" id="collapseExample">
            <div class="card card-body">

                <span class="font-weight-bold d-flex justify-content-center align-items-center heading">Watch video on how
                    to Apply</span>
                <div class="d-flex justify-content-center align-items-center my-4 ">
                    <iframe width="600" height="400" src="https://www.youtube.com/embed/qcBALLyYTw8" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        echo '<form action="./applyScholarship.php">
            <button class="btn shadow-sm heading" type="submit" name="scholarid" value="<?php echo $id ?>"><a
                    id="applyNow">Apply
                    Now</a></button>
        </form>';
        }
        else{
            echo '
            <div class="container">
            <p class="py-2 text-center lead">You are not logged in. Please login Apply for Scholarship!</p>
            </div>
            ';
            }
        ?>

    </div>
    <!-- Know more ends here -->


    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '<div class="container">
        <h1 class="py-2 text-center heading">See what other students have to say</h1>
        <div class="container shadow bg-white rounded">
        <form action="' .$_SERVER["REQUEST_URI"]. '" method="post" enctype="">
    <div class="form-group heading-no-text-no-hover">
        <label for="exampleInputEmail1" class="mx-2">Feedback Title</label>
        <input type="text" class="input text shadow-sm" id="title" name="title" placeholder="title" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted mx-2">Keep your title as short</small>
    </div>
    <input type="hidden" name="sno" value="'. $_SESSION['sno']. '">
    <div class="form-group heading-no-text-no-hover">
        <label for="exampleFormControlTextarea1" class="mx-2">Feedback Description</label>
        <textarea class="input text shadow-sm" id="desc" name="desc" placeholder="description" rows="3"></textarea>
        <small id="emailHelp" class="form-text text-muted mx-2">Elaborate your feedback</small>
    </div>
    <button type="submit" class="btn shadow-sm heading">Post</button>
    </form>
    </div>
    </div>';
    }
    else{
    echo '
    <div class="container">
    <h1 class="py-2 text-center heading">See what other students have to say</h1>
    <p class="py-2 text-center lead">You are not logged in. Please login to share your feedback!</p>
    </div>
    ';
    }

    ?>

    <div class="py-2 container" id="ques">
        <br>
        <hr>
        <h1 class="py-2 my-4 text-center heading">Browse Feedback</h1>
        <?php
        $id =  $_GET['scholarid'];
        $sql = "SELECT * FROM `feedbacks` WHERE feedback_scholar_id = $id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while($row = mysqli_fetch_assoc($result)){
            $noResult = false;
            $id = $row['feedback_id'];
            $title = $row['feedback_title'];
            $desc = $row['feedback_desc'];
            $feedback_time = $row['timestamp'];
            $feedback_stud_id = $row['feedback_stud_id'];
            $sql2 = "SELECT * FROM `students` WHERE sno='$feedback_stud_id'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($result2);
            // echo $row2['student_email'];
            // echo $feedback_stud_id;

        echo '<div class="media my-3">
                <img src="img/userdefault1.png" width="54px" class="mr-3" alt="...">
                <div class="media-body">'.
            
                '<h5 class="mt-0"><a class="text" href="feedback.php?feedbackid=' .$id. '">'
                 .$title. '</a></h5>
                '. $desc .'</div>' 
                .'<div class="font-weight-bold my-0"> posted by: ' .$row2['student_email']. 
                ' at ' .$feedback_time. '</div>'.
        '</div>';

        }
        // echo var_dump($noResult);
        if($noResult){
            echo '<div class="jumbotron jumbotron-fluid">
            <div class="container">
              <p class="display-4  text-center text">No Feedback Found</p>
              <p class="lead  text-center">Be the first person to give a feedback!</p>
            </div>
          </div>';
        }
        ?>
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
</body>

</html>