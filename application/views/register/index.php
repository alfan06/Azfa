<script>
        function passwordShowUnshow() {
            var x = document.getElementById("password");
            var y = document.getElementById("passwordConf");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
</script>
<div class="container py-5">
    <div class="d-flex justify-content-center h-100 py-5 mt-5">
        <div class="card2">
            <div class="card-header center">
                <h3 class="text-center">Register</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="username" name="username" id="username" required>
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="password" name="password" id="password" required>
                    </div>
                    <div class="row align-items-center remember">
						<input type="checkbox" onclick="passwordShowUnshow()" id="checkbox">Show password
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="submit" class="btn login_btn btn-block">Register</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Already Have an Account<a href="<?= base_url(); ?>login">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</div>