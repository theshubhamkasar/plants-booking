<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>

	<div class="row">
		<div class="col-lg-3">

		</div>


		<div class="col-lg-6">
			<!-- sign up form start -->

			<div class="card shadow container mt-5 mb-5">

				<!-- displaying image start -->

				<center>
					<div>
						<img style="width: 320px;" src="">
					</div>
				</center>

				<!-- Displaying image end -->

				<center>
					<h2 class="mt-4 mb-4">USER LOGIN</h2>
				</center>

				<!-- Form starts here -->

				<form action="process/process_userlogin.php" method="POST" autocomplete="off">


					<div class="form-group">
						<label>E-mail</label>
						<input type="email" name="email" class="form-control" placeholder="Enter your email" required="true">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Enter Password" required="true">
					</div>

					<center>
						<div class="form-group">
							<button class="btn btn-outline-dark">LOGIN</button>
						</div>
					</center>

				</form>


				<!-- form ends here -->
			</div>

			<!-- sign up form end -->

		</div>


		<div class="col-lg-3">

		</div>

	</div>




</body>

</html>