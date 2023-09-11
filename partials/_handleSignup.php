<?php 
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $student_email = $_POST['signupEmail'];

    $result = mysqli_query($conn,"SELECT * FROM `students` WHERE `student_email` = '$Email'");
    $row = mysqli_fetch_array($result);

    $First_Name = $_POST['first_name'];
    $Last_Name = $_POST['last_name'];
    $Phone_No = $_POST['phone'];
    $Date_of_Birth = $_POST['dob'];

    $pass = $_POST['signupPassword'];
    $cpass= $_POST['signupcPassword'];

    // check whether this email exists
    $existSql = "select * from `students` where student_email = '$student_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email already in use";
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `students` ( `student_email`, `student_pass`, `F_name`, `L_name`, `p_no`, `dob`) VALUES ('$student_email', '$hash', '$First_Name', '$Last_Name','$Phone_No','$Date_of_Birth')";
            $result =  mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
                header("Location: /forum/index.php?signupsuccess=true");
                exit();
            }
        }
        else{
        $showError = "Passwords do not match";
        }
    }
    header("Location: /forum/index.php?signupsuccess=false&error=$showError");
}
?>