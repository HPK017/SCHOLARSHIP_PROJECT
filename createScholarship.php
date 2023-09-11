<?php
if (isset($_POST ["scholarship_title"]) && $_POST ["scholarship_title"] != "") {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = $_POST['scholarship_title'];
            $desc = $_POST['scholarship_desc'];

            $sql = "INSERT INTO `scholarships` (`scholarship_name`, `scholarship_description`, `created`) VALUES ('$title',
            '$desc', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            
        }
    }
?>
