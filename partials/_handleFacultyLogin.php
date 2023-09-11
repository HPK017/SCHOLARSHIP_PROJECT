<?php 
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $facultyemail = $_POST['loginFacultyEmail'];
    $facultypass = $_POST['loginFacultyPass'];

    $sql = "Select * from `faculty` where `faculty_email`='$facultyemail'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $row = mysqli_fetch_array($result);
        if(password_verify($facultypass, $row['faculty_pass'])){
        session_start();
        $_SESSION['facultyloggedin']= true;
        $_SESSION['sno']= $row['sno'];
        $_SESSION['facultyemail']= $facultyemail;
        echo "logged in". $facultyemail;
        header("Location: /forum/facultyDetails.php");
        
        }
        else
        {
            header("Location: /forum/faculty.php");
    
        }
    }
}
?>