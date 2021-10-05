<!DOCTYPE html>
<html lang="en">
<head>
	<?=$this->include('layout/header')?>
</head>
<body>
	<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
		<div class="container">
			<?=$this->include('layout/notif')?>
			<div class="row justify-content-center">
				<div class="col-xxl-4 col-lg-5">
					<div class="card">
						<!-- Logo -->
						<div class="card-header pt-4 pb-4 text-center bg-primary">
							<a href="<?=base_url()?>">
								<span><img src="<?=base_url()?>/assets/images/logo.png" alt="" height="18"></span>
							</a>
						</div>

						<div class="card-body p-4">
							<form action="<?=base_url()?>/auth/login" method="POST">
								<?=csrf_field()?>
								<div class="mb-3">
									<label for="emailaddress" class="form-label">Username</label>
									<input class="form-control" name="username" type="text" autofocus required="" placeholder="Enter your username">
								</div>

								<div class="mb-3">
									<label for="password" class="form-label">Password</label>
									<div class="input-group input-group-merge">
										<input type="password" name="password" class="form-control" placeholder="Enter your password" required>
									</div>
								</div>

								<div class="mb-3 mb-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
										<label class="form-check-label" for="checkbox-signin">Remember me</label>
									</div>
								</div>

								<div class="mb-3 mb-0 text-center">
									<button class="btn btn-primary" type="submit" name="submit" value="Submit"> Log In </button>
								</div>

							</form>
						</div> <!-- end card-body -->
					</div>
					<!-- end card -->
				</div> <!-- end col -->
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</div>

	<!-- /End-bar -->
	<footer class="footer footer-alt">
		2021 © TimCwan
	</footer>
	<?=$this->include('layout/js')?>
</body>

</html>