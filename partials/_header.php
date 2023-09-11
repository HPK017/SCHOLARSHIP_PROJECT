<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradplus Header</title>
    <link rel="stylesheet" href="./style.css">

    <style>
    #navbar {
        height: 80px;
        /* padding-right: 0;
        padding-left: 0; */
        position: sticky;
        top: 0;
        z-index: 999;
    }

    #navbar1 {
        padding-right: 0;
        padding-left: 0;
        /* position: sticky; */
        top: 0;
        /* z-index: 999; */
    }

    #navbarDropdown {
        z-index: 999;
    }

    .form-inline {
        padding: 0px;
    }

    /* #navbarSupportedContent {
        padding-right: 65px;
        padding-left: 65px;

    } */
    </style>
</head>

<body>
<div class="container"></div>
    <?php
session_start();

echo'
<nav class="navbar navbar-expand-lg navbar bg-light shadow bg-white rounded" id="navbar">
<div class="scroll-indicator my-0" id="navbar1"></div>
<div class="container">


<div class="collapse navbar-collapse d-flex mx-4 justify-content-center align-items-center" id="navbarSupportedContent">

  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link  heading-no-text font-weight-bold" href="/forum" >Home<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link heading-no-text font-weight-bold" href="about.php">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link heading-no-text font-weight-bold" href="contact.php">Contact</a>
    </li>

  <li>    
      <a class="col-md-1 mx-4 " href="/forum" ><img src="img/scholarship4.png" width="130px" alt="..."></a>
  </li>

  
  <div class="row mx-2">';
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo '<li><form class="form-inline my-2 my-lg-0 " id="search" method="get" action="search.php">
    <input class="form-control mr-sm-2 " name="search"  type="search" placeholder="Search" aria-label="Search">
    
    <button class="btn my-2 my-sm-0 text" type="submit">Search</button>
    <p class="heading my-0 mx-2 font-weight-bold"> 
 
    <a class="nav-link heading-no-text font-weight-bold" href="profile.php">Profile</a>
    </p>
</li>
<li>
    <a href="partials/_logout.php" class="btn ml-2 heading">Logout</a>
    
    </form></li>';
}
else{
    echo '<li><form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn my-2 my-sm-0 text" type="submit">Search</button>
    </li>
    </form>
    <li>
    <button class="btn ml-2 heading" data-toggle="modal" data-target="#loginModal">Login</button>
    </li>
    <li>
    <button class="btn mx-2 heading" data-toggle="modal" data-target="#signupModal">SignUp</button>
    </li>';

}

  echo ' </ul>
  </div>
      </div>
      </div>
      </nav>';
      // concatinating closing tags


// Including all Modals
include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
include 'partials/_adminSignupModal.php';
include 'partials/_adminLoginModal.php';
include 'partials/_facultySignupModal.php';
include 'partials/_facultyLoginModal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
          <strong>Success!</strong> You can now login
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
</div>';
}
?>


    <script src="./app.js"></script>
</body>

</html>
