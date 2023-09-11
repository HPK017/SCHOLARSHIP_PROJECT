<?php 
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $faculty_email = $_POST['signupFacultyEmail'];
    $facultypass = $_POST['signupFacultyPassword'];
    $facultycpass= $_POST['signupcFacultyPassword'];

    // check whether this email exists
    $existSql = "select * from `faculty` where faculty_email = '$faculty_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email already in use";
    }
    else{
        if($facultypass == $facultycpass){
            $hash = password_hash($facultypass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `faculty` ( `faculty_email`, `faculty_pass`, `timestamp`) VALUES ('$faculty_email', '$hash', current_timestamp())";
            $result =  mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
                header("Location: /forum/faculty.php?signupsuccess=true");
                exit();
            }
        }
        else{
        $showError = "Passwords do not match";
        }
    }
    header("Location: /forum/faculty.php?signupsuccess=false&error=$showError");
}
?>