<?php 
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];

    $sql = "Select * from students where student_email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['student_pass'])){
        session_start();
        $_SESSION['loggedin']= true;
        $_SESSION['sno']= $row['sno'];
        $_SESSION['studentemail']= $email;
        echo "logged in". $email;
        header("Location: /forum/index.php");
        }
    }
    header("Location: /forum/index.php");
}
?>