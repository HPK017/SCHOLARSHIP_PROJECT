<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title heading-no-text-no-hover" id="signupModalLabel">Signup for an Gradplus account
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/forum/partials/_handleSignup.php" method="post">
                    <div class="modal-body">
                        <div class="form-group heading-no-text-no-hover">
                            <label for="exampleInputEmail1">
                                Email </label>
                            <!-- <input type="email" class="form-control" id="signupEmail" name="signupEmail"
                                aria-describedby="emailHelp"> -->
                            <input type="text" class="form-control input text shadow-sm p-3 bg-white rounded"
                                id="signupEmail" placeholder="email" name="signupEmail" aria-describedby="emailHelp" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small> -->
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6 heading-no-text-no-hover">
                                <label for="first_name">
                                    First name </label>
                                <input type="text" class="form-control input text shadow-sm p-3 bg-white rounded"
                                    name="first_name" id="first_name" placeholder="first name"
                                    title="Enter your First name." required>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6 heading-no-text-no-hover">
                                <label for="last_name">
                                    Last name </label>
                                <input type="text" class="form-control input text shadow-sm p-3 bg-white rounded"
                                    name="last_name" id="last_name" placeholder="last name"
                                    title="Enter your Last name." required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6 heading-no-text-no-hover">
                                <label for="phone">
                                    Phone </label>
                                <input type="text" class="form-control input text shadow-sm p-3 bg-white rounded"
                                    name="phone" id="phone" placeholder="phone" title="Your phone number." required>
                            </div>
                        </div>


                        <div class="form-group">

                            <div class="col-xs-6 heading-no-text-no-hover">
                                <label for="dob">
                                    DOB </label>
                                <input type="text" class="form-control input text shadow-sm p-3 bg-white rounded"
                                    name="dob" id="dob" placeholder="dob" title="Your DOB." required required>
                            </div>
                        </div>

                        <div class="form-group heading-no-text-no-hover">
                            <label for="exampleInputPassword1">
                                Create Password
                            </label>
                            <input type="password" class="form-control input text shadow-sm p-3 bg-white rounded"
                                id="signupPassword" placeholder="pass" name="signupPassword" required>
                        </div>
                        <div class="form-group heading-no-text-no-hover">
                            <label for="exampleInputPassword1" required>
                                Comfirm Password
                            </label>
                            <input type="password" class="form-control input text shadow-sm p-3 bg-white rounded"
                                id="signupcPassword" placeholder="confirm pass" name="signupcPassword" required>
                        </div>




                        <button type="submit" class="btn heading">Signup</button>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn heading" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>