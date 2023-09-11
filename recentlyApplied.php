<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> -->


    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="./style.css">
    <title>Gradplus</title>

    <style>
    .container-form {
        background-color: #fffff;
        border-radius: 20px;
    }
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>


    <?php  
    $showAlert = false;
    $accepts = false;
    $delete = false;
    $sent = false;

    if(isset($_GET['delete'])){
        $sno = $_GET['delete']; 
        $delete = true;
        $sql = "DELETE FROM `profile` WHERE `profile_no` = $sno";
        $result = mysqli_query($conn,$sql);
    }

    //   if($accepts){
    //         echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
    //         <strong>Success! </strong>Your form has been updated!
    //         <button type="button" class="close" data-dismiss="success" aria-label="Close">
    //           <span aria-hidden="true">&times;</span>
    //         </button>
    //         </div>';
    //     }


      if($delete){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Your Scholarship application has been removed.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }
    //   if($sent){
    //         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //         Other message.
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //           <span aria-hidden="true">&times;</span>
    //         </button>
    //         </div>';
    //     }
    ?>

    <?php
    $showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $studentemail = $_POST['loginStudentEmail'];
        }
    ?>

    <div class="container my-0">
        <!-- cont -->
        <!-- <hr class="my-4"> -->
        <ul class="list-group my-4">
        <!-- <span class="text-right heading-no-text my-4"><strong class="shadow p-3 mb-5 bg-white rounded">Faculty Username: <?php echo $studentemail; ?></strong></span> -->
        </ul>
        <h1 class="text-center heading">Recently Applied Scolarships</h1>
        <table class="table my-3 text-dark" id="myTable">
            <thead>
                <tr>
                <th scope="col">S.No</th>
                    <th scope="col">proof1</th>
                    <th scope="col">proof2</th>
                    <th scope="col">proof3</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col"></th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `students` WHERE `student_email`= '$_SESSION[studentemail]'";
                $result1 = mysqli_query($conn , $sql);
                $row1 = mysqli_fetch_array($result1);
                if($row1 == null){

                }
                else{
            $sql = "SELECT * FROM `profile` WHERE `profile_stud_id` = '$row1[sno]'";
            $result = mysqli_query($conn, $sql);
            $profile_no = 0;
            while($row = mysqli_fetch_assoc($result)){
                $profile_no = $profile_no + 1;
                $body = "Hope you are doing well and are safe! This email is being sent to you as a confirmation that your documents we accepted during the validation process and you are eligible for the scholarship applied, Congratulations! from @teamGradplus &#128588;";
                ?>
                <tr>
                <th scope='row'><?php echo $profile_no ?></th>
                <?php  
                echo "
                <td> <img src='images/".$row['proof1']."' style='width:100px ;border-radius:10px;' </td>
                <td> <img src='images/".$row['proof2']."' style='width:100px ;border-radius:10px;' </td>
                <td> <img src='images/".$row['proof3']."' style='width:100px ;border-radius:10px;' </td>
                <td>".$row['first_name']."</td>
                <td>".$row['last_name']."</td>
                <td>".$row['dob']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['city']."</td>
                <td>".$row['state']."</td>

                <td></button> <button class='delete btn btn-sm btn-danger text'id=d". $row["profile_no"] .">Delete</button></td>
                </tr>";
            }
        }
        ?>
            </tbody>
        </table>
        <a href="partials/_logout.php" class="btn my-4 shadow-sm text">Logout</a>
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
    <!-- <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
    <script>
    // edits = document.getElementsByClassName('edit');
    // Array.from(edits).forEach((element) => {
    //     element.addEventListener("click", (e) => {
    //         console.log("edit", );
    //         tr = e.target.parentNode.parentNode;
    //         email = tr.getElementsByTagName("td")[3].innerText;
    //         phone = tr.getElementsByTagName("td")[4].innerText;
    //         console.log(email, phone)
    //         emailEdit.value = email;
    //         phoneEdit.value = phone;
    //         snoEdit.value = e.target.id;
    //         console.log(e.target.id)
    //         $('#editModal').modal('toggle');
    //     })
    // })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit", );
            sno = e.target.id.substr(1, );

            if (confirm("Are you sure you want to remove this application?")) {
                console.log("yes");
                window.location = `/forum/recentlyApplied.php?delete=${sno}`;
                // TODO: Create a form and use post request to submit a form
            } else {
                console.log("no");
            }
        })
    })

    // accepts = document.getElementsByClassName('accepts');
    // Array.from(accepts).forEach((element) => {
    //     element.addEventListener("click", (e) => {
    //         console.log("edit", );
    //         sno = e.target.id.substr(1, );

    //         if (confirm("Are you sure you want to send them an email")) {
    //             console.log("yes");
    //             window.location = `/forum/applyScholarship.php?delete=${sno}`;
    //             // TODO: Create a form and use post request to submit a form

    //         } else {
    //             console.log("no");
    //         }
    //     })
    // })

    sent = document.getElementsByClassName('sent');
    Array.from(sent).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit", );
            sno = e.target.id.substr(1, );
            window.location = `/forum/recentlyApplied.php?delete=${sno}`;
        })
    })
    </script>
</body>

</html>