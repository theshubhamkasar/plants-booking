<?php
session_start();

?>

<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>


<?php

include("connection.php");
include("navbar.php");

if (!isset($_SESSION['user'])) {
	header("Refresh:0; userlogin.php");
	die();
}


?>

<?php

$logged_user = $_SESSION['user'];

$query = "SELECT * FROM user WHERE email='$logged_user' ";

$sql = mysqli_query($conn, $query);



?>

<?php

$logged_user = $_SESSION['user'];

$query1 = "SELECT * FROM booking WHERE email='$logged_user' ";

$sql1 = mysqli_query($conn, $query1);

$rows = mysqli_num_rows($sql1);




?>

<br>

<div class="container">
	<div class="card shadow mb-3">
		<center>
			<div class="card-header bg-warning">
				<h3><b>Profile</b></h3>
			</div>
		</center>
		<div class="card-body text-center">

			<?php

			while ($row = mysqli_fetch_row($sql)) {

				echo "<p><b>Name :</b> " . $row[1] . "</i></p>";
				echo "<p><b>Email :</b> " . $row[2] . "</i></p>";
			}
			?>

		</div>
	</div>

</div>


<br>

<div class="container">
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6">

			<center>
				<div class="text-info">
					<h3><b>-: My Bookings :-</b></h3>
				</div>
			</center>

		</div>
		<div class="col-lg-3"></div>
	</div>


</div>

<?php

if ($rows == 0) {
	echo "<br><br><center><h2>Not booked yet...</center></h2>";
} elseif ($rows > 0) { ?>



	<div class="container">
		<div class="col-lg-12">
			<br>
			<table class="table table-striped table-hover table-bordered ">

				<tr class="bg-dark text-white text-center">
					<th>Plant Name</th>
					<th>Number Of Plants</th>
					<th>Cancel Complaint</th>

					<form action="cancel_booking.php" method="POST">

				</tr>


				<?php

				$btn = '
					<button class="btn btn-success" name="cancel-complaint" >
							Cancel Complaint
					</button>
					';


				while ($row1 = mysqli_fetch_row($sql1)) { ?>

					<tr class="text-center">
						<td><?php echo $row1['2']; ?></td>
						<td><?php echo $row1['3']; ?></td>
						<td><?php echo $btn; ?></td>


					</tr>

			<?php }
			} ?>

			</form>

			</table>
		</div>

	</div>