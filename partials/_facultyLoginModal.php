<!-- Modal -->
<div class="modal fade" id="facultyLoginModal" tabindex="-1" aria-labelledby="facultyLoginModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title heading-no-text-no-hover" id="facultyLoginModal">Login to Gradplus Faculty account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/forum/partials/_handleFacultyLogin.php" method="post">
                <div class="modal-body">
                    <div class="form-group heading-no-text-no-hover">
                        <label for="loginFacultyEmail">Email</label>
                        <input type="text" class="form-control input text shadow-sm p-3 bg-white rounded " id="loginFacultyEmail" placeholder="email" name="loginFacultyEmail"
                            aria-describedby="emailHelp" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="form-group heading-no-text-no-hover">
                        <label for="loginFacultyPass">Password</label>
                        <input type="password" class="form-control input text shadow-sm p-3 bg-white rounded" id="loginFacultyPass" placeholder="pass" name="loginFacultyPass" required>
                    </div>
                    <button type="submit" class="btn  heading my-2">submit</button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn heading" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>