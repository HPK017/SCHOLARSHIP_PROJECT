<!-- Modal -->
<div class="modal fade" id="facultySignupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title heading-no-text-no-hover" id="facultySignupModal">Signup for an Gradplus Faculty account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/forum/partials/_handleFacultySignup.php" method="post">
                    <div class="modal-body">
                        <div class="form-group heading-no-text-no-hover">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="form-group text" class="form-control input text shadow-sm p-3 bg-white rounded " id="signupFacultyEmail" placeholder="email" name="signupFacultyEmail"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group heading-no-text-no-hover">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control input text shadow-sm p-3 bg-white rounded" id="signupFacultyPassword" placeholder="pass" name="signupFacultyPassword" required>
                        </div>
                        <div class="form-group heading-no-text-no-hover">
                            <label for="exampleInputPassword1">Comfirm Password</label>
                            <input type="password" class="form-control input text shadow-sm p-3 bg-white rounded" id="signupcFacultyPassword" placeholder="confirm pass" name="signupcFacultyPassword" required>
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