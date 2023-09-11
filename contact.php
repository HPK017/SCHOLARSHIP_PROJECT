<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gradplus Contact</title>
    <script src="https://kit.fontawesome.com/36328cadf9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <style>

    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <?php
// $to_email = "nayaksupreeth82@gmail.com";
// $subject = "Simple Email Test via PHP";
// $body = "Hi, This is test email send by PHP Script";
// $headers = "From: nayaksupreeth4@gmail.com";
if (isset($_POST ["email"]) && $_POST ["email"] != "") {
    $to_email = "nayaksupreeth82@gmail.com";
    $subject = $_POST['subject'];
    $body =  $_POST['message'];
    $from_email = $_POST['email'];
    $headers = "From: $from_email";
    
    if (mail($to_email, $subject, $body, $headers)) {
        echo '<div class="alert alert-success font-weight-bold" role="alert">
        Email sent successfully!
      </div>';
    } else {
        echo '<div class="alert alert-danger font-weight-bold" role="alert">
        Email sending failed!
        </div>';
    }

}
?>

    <h2 class="text-center my-4 heading">Contact Gradplus</h2>
    <div class="container my-0 container-form shadow p-3 mb-5 bg-white rounded">
        <form action="contact.php" method="POST" class="form">
            <div class="form-group heading-no-text-no-hover">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="input heading shadow-sm bg-white rounded" id="name" name="name"
                    placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group heading-no-text-no-hover">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="input heading shadow-sm bg-white rounded" id="email" name="email"
                    placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group heading-no-text-no-hover">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="input heading shadow-sm bg-white rounded" id="subject"
                    name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group heading-no-text-no-hover">
                <label for="message" class="form-label ">Message</label>
                <textarea class="input heading shadow-sm bg-white rounded" rows="5" cols="50" id="message"
                    name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn heading">Send Message!</button>
            </div>
        </form>
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