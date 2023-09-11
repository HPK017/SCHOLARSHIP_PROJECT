<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Gradplus About</title>
    <style>
    body {
        background-color: white;    
        overflow-x: hidden;
        /* overflow: hidden; */
    }

    .contact-container {
        padding-top: 90px;
        padding-bottom: 20px;
        text-align: center;
    }
    h1{
        font-weight: 700;
    }
    h2{
        font-weight: 400;
    }
    .contact-container img{
        width: 230px;
    }
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>





    <div class="contact-container p-3">
        <h1 class="heading-no-text-no-hover">Welcome to Gradplus About page</h1>
        <h4 class="heading-no-text-no-hover my-3">Know more about this website here</h4>
        <div class="image text">
            <img src="img/scholarship4.png" alt="logo" class="p-3 my-4 shadow-lg p-3 mb-4 bg-white rounded">
        </div>
        <h4 class="heading-no-text-no-hover my-4">"Gradplus" is a website made for young learners to help get their dream job, Do let us know what do you feel about this website</h4>
        <h4 class="heading-no-text-no-hover my-4">Follow the social handles provided below and get in touch with us</h4> 
    </div>

  <div class="row">
    <div class="col-md-8 mx-auto">

<div class="container">
    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/testi1.png" class="d-block w-100 crousel1" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/testi2.png" class="d-block w-100 crousel1" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span ><img src="img/left.png"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span ><img src="img/right1.png"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


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