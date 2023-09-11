
<h2 class="text-center my-4 heading">Fill the form below</h2>
<div class="container my-0 container-form shadow p-3 mb-5 bg-white rounded">


<!-- Scholarship form Submission starts here -->

<form aciton="/forum/profile.php" method="post">
    <div class="mb-3 font-weight-bold text">
        <label for="first_name">First name</label>
        <input type="text" class="input text shadow-sm bg-white rounded" id="first_name" name="first_name" placeholder="Jane">
    </div>

    <div class="font-weight-bold text">
        <label for="last_name">Last name</label>
        <input type="text" class="input text shadow-sm bg-white rounded" id="last_name" name="last_name" placeholder="Doe">
    </div>

    <div class="font-weight-bold text my-3">
        <label for="dob" class="col-2 col-form-label">DOB</label>
        <div class="col-10">
            <input class="input text shadow-sm bg-white rounded" type="date" value="0000-00-00" id="dob" name="dob">
        </div>
    </div>

    <div class="font-weight-bold text my-3">
        <label for="email">Email</label>
        <input type="text" class="input text shadow-sm bg-white rounded" id="email"  name="email" placeholder="example@gmail.com">
    </div>

    <div class="font-weight-bold text">
        <label for="phone">Phone</label>
        <input type="text" class="input text shadow-sm bg-white rounded" id="phone" name="phone" placeholder="Valid phone number">
    </div>
    <br>
    <div class="font-weight-bold text">
        <label for="city">City</label>
        <input type="text" class="input text shadow-sm bg-white rounded" id="city" name="city" placeholder="Banglore">
    </div>
    <br>
    <div class="font-weight-bold text">
        <label for="state">State</label>
        <input type="text" class="input text shadow-sm bg-white rounded" id="state" name="state" placeholder="Karnataka">
    </div>

    <button class="btn my-4 shadow-sm text" type="submit">Apply Now</button>
</form>
<!-- Scholarship form Submission ends here -->
</div>