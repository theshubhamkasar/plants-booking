<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>

	<div class="card shadow">
		<div class="card-body">
			<a href="index.php">
				<h5 class="card-title">Plant Booking</h5>
			</a>

			<a href="logout.php">
				<button class=" mr-3 btn btn-outline-danger">Logout</button>
			</a>

			<?php

			$a_panel = '
				<h2 class="text-success">Admin Dashboard</h2>
				';

			$btn = '<a href="myprofile.php">
							<button class=" mr-3 btn btn-outline-secondary">My Profile</button>
 								 </a>';
			?>



			<?php
			if (isset($_SESSION['admin'])) {
				echo $a_panel;
			} else if (isset($_SESSION['user'])) {
				echo $btn;
				
			}


			?>






		</div>
	</div>



</body>

</html>


<style>
	.btn-outline-danger {
		float: right;
	}

	.btn-outline-secondary {
		float: right;
	}

	
</style>


<!-- 
<style type="text/css">
	.btn-warning {

		text-decoration: none;
		color: #fff;
		float: right;
		margin: 30px 20px 0px 0px;
	}

	.btn-dark {

		text-decoration: none;
		color: #fff;
		float: right;
		margin: 30px 20px 0px 0px;
	}

	.btn-secondary {

		text-decoration: none;
		color: #fff;
		float: left;
		margin: 30px 0px 0px 20px;
	}

	.btn-danger {

		text-decoration: none;
		color: #fff;
		float: left;
		margin: 30px 0px 0px 40px;
	}
</style> -->