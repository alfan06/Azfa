<?=
    form_open('login/proses_login');
?>
<div class="container py-5">
	<div class="d-flex justify-content-center h-100 py-5 mt-5">
		<div class="card">
			<div class="card-header center">
				<h3 class="text-center">Sign In</h3>
			</div>
			<div class="card-body">
				<form role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <input type="text" class="form-control" placeholder="username" name="uname1" id="uname1" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                        <input type="password" class="form-control" placeholder="password" name="pwd1" id="pwd1" required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
                    </div>
                    <br>
					<div class="form-group">
						<input type="submit" value="Login" class="btn login_btn btn-block">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="<?= base_url(); ?>auth/">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?=
    form_close();
?>