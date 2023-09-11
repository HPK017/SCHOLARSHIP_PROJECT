<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
    #ques {
        min-height: 433px;
    }
    .card-body a{
        text-decoration: none;
    }
    .rightIcon{
        width: 0.5px;
    }

    </style>
    <title>Gradplus Home</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <!-- slider starts here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">


            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active color-info"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider-13.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-23.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-36.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span ><img src="img/left.png"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span ><img src="img/right1.png"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Scholarship container starts here -->
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4 heading-no-text-no-hover">Browse scolarships</h2>
        <div class="row my-4">
            <!-- Fetch all the Scholarships -->
            <!-- Use a for loop to iterate through Scholarships -->

            <?php
               $sql = "SELECT * FROM `scholarships`";
               $result = mysqli_query($conn, $sql);
               while($row = mysqli_fetch_assoc($result)){
                  // echo $row['category_id'];
                  // echo $row['category_name'];
                  $id = $row['scholarship_id'];
                  $scholar = $row['scholarship_name'];
                  $desc= $row['scholarship_description'];
                  echo '<div class="col-md-4 my-2 ">
                  
                  <div class="card shadow-lg mb-5 bg-white rounded" style="width: 18rem;">

                  
                      <img src="img/card-'.$id.'.png" class="card-img-top " alt="image for this Scholarship">
                      <div class="card-body ">
                          <h5 class="card-title"><a class="text" href=" feedbacklist.php?scholarid=' .$id. ' ">'. $scholar .'</a></h5>
                          <p class="card-text text-lite">'.substr($desc,0,90).'...</p>
                          <a href=" feedbacklist.php?scholarid=' .$id. ' " class="btn shadow-sm heading">View</a>
                      </div>
                  </div>
              </div>';
               }

               ?>
        </div>
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