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
    <title>Gradplus Admin</title>

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
    <?php include './createScholarship.php';?>

    <?php
    $showError = "false";
    $adminemail = $_SESSION['adminemail'];

    ?>


    <!-- Creating a scholarship -->
    <div class="container">
        <ul class="list-group my-4">
            <span class="text-right my-4" style="color: white;"><strong class="shadow p-3 mb-5 bg-dark rounded">Admin:
                    <?php echo $adminemail; ?></strong></span>
        </ul>
    </div>
    <div class="container my-0 container-form box shadow p-3 mb-5 bg-white rounded">
        <h2 class="text-center my-4 heading">Create Scholarship</h2>
        <form method="POST" aciton="./createScholarship.php">
            <div class="mb-3 font-weight-bold text">
                <label for="scholarship_title">Title</label>
                <input type="text" class="input text shadow-sm bg-white rounded" id="scholarship_title" placeholder="title"
                    name="scholarship_title">
            </div>
            <div class="textarea font-weight-bold text">
                <label for="scholarship_desc">Description</label>
                <textarea class="input text shadow-sm bg-white rounded" id="scholarship_desc"  placeholder="description"
                    name="scholarship_desc"></textarea>
            </div>
            <button class="btn my-3 shadow-sm heading" type="submit" name="scholarid">Create</button>
        </form>
        <ul class="list-group">
        <span class="text-right heading"><a href="partials/_facultyLogout.php" class="btn my-0 shadow-sm text">Logout</a></span>
        </ul>
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
                window.location = `/forum/applyScholarship.php?delete=${sno}`;
                // TODO: Create a form and use post request to submit a form
            } else {
                console.log("no");
            }
        })
    })

    accepts = document.getElementsByClassName('accepts');
    Array.from(accepts).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit", );
            sno = e.target.id.substr(1, );

            if (confirm("Are you sure you want to send them an email")) {
                console.log("yes");
                window.location = `/forum/applyScholarship.php?delete=${sno}`;
                // TODO: Create a form and use post request to submit a form

            } else {
                console.log("no");
            }
        })
    })

    sent = document.getElementsByClassName('sent');
    Array.from(sent).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit", );
            sno = e.target.id.substr(1, );
            window.location = `/forum/applyScholarship.php?delete=${sno}`;
        })
    })
    </script>
</body>

</html>