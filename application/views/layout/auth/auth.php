<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('assets/auth/') ?>fonts/icomoon/style.css">

	<link rel="stylesheet" href=" <?= base_url('assets/auth/') ?>css/owl.carousel.min.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href=" <?= base_url('assets/auth/') ?>css/bootstrap.min.css">

	<!-- Style -->
	<link rel="stylesheet" href=" <?= base_url('assets/auth/') ?>css/style.css">

	<title>Login #7</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>


<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="<?= base_url('assets/auth/') ?>images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
			</div>
			<div class="col-md-6 contents">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="mb-4">
							<h3>Sign In</h3>
							<p class="mb-4">To Create x-api-key.</p>
						</div>
						<?= form_open_multipart('welcome/login') ?>
						<div class="form-group first">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username">

						</div>
						<div class="form-group last mb-4">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password">

						</div>
						<div class="d-flex mb-5 align-items-center">
							<label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
								<input type="checkbox" checked="checked"/>
								<div class="control__indicator"></div>
							</label>
							<span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
						</div>
						<button type="submit" value="Log In" class="btn btn-block btn-primary"> Log In</button>
						<div class="d-flex mb-5 align-items-center">
							<span class="ml-auto"><a href="#" class="forgot-pass">Register</a></span>
						</div>
						</form>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>


<script src="<?= base_url('assets/auth/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/auth/') ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/auth/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/auth/') ?>js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous"></script>


</body>
</html>
