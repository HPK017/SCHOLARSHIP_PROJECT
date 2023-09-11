<!-- Modal -->
<div class="modal fade" id="adminLoginModal" tabindex="-1" aria-labelledby="adminLoginModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title heading-no-text-no-hover" id="adminLoginModal">Login to Gradplus Admin account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/forum/partials/_handleAdminLogin.php" method="post">
                <div class="modal-body">
                    <div class="form-group heading-no-text-no-hover">
                        <label for="loginAdminEmail">Email</label>
                        <input type="text" class="form-control input text shadow-sm p-3 bg-white rounded " id="loginAdminEmail" placeholder="email" name="loginAdminEmail"
                            aria-describedby="emailHelp" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="form-group heading-no-text-no-hover">
                        <label for="loginAdminPass">Password</label>
                        <input type="password" class="form-control input text shadow-sm p-3 bg-white rounded" id="loginAdminPass" placeholder="pass" name="loginAdminPass" required>
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