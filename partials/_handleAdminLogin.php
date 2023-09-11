<?php 
$showError = "false";
include '_dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $adminemail = $_POST['loginAdminEmail'];
    $adminpass = $_POST['loginAdminPass'];

    $sql = "Select * from `admin` where `admin_email`='$adminemail'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);//same
    if($numRows>0){
        $row = mysqli_fetch_array($result);
        // converts and verifies
        if(password_verify($adminpass, $row['admin_pass'])){
        session_start();
        $_SESSION['adminloggedin']= true;// array
        $_SESSION['sno']= $row['sno'];
        $_SESSION['adminemail']= $adminemail;
        echo "logged in". $adminemail;
        header("Location: /forum/adminDetails.php");//:jump

        }
        else
        {
            header("Location: /forum/admin.php");

        }
    }
}
?>