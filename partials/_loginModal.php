<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title heading-no-text-no-hover" id="loginModalLabel">Login to Gradplus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/forum/partials/_handleLogin.php" method="post">
                <div class="modal-body">
                    <div class="form-group heading-no-text-no-hover">
                        <label for="loginEmail">
                            Email
                        </label>
                        <input type="text" class="form-control input text shadow-sm p-3 bg-white rounded"
                            id="loginEmail" placeholder="email" name="loginEmail" aria-describedby="emailHelp" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="form-group heading-no-text-no-hover">
                        <label for="loginPass">
                            Password
                        </label>
                        <input type="password" class="form-control input text shadow-sm p-3 bg-white rounded"
                            id="loginPass" placeholder="pass" name="loginPass" required>
                    </div>
                    <button type="submit" class="btn heading">Submit</button>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn heading" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>