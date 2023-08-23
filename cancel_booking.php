<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>


<?php

session_start();

include("connection.php");

$logged_user = $_SESSION['user'];

$query = "DELETE FROM booking WHERE email = '$logged_user' ";

$sql = mysqli_query($conn, $query);

if ($sql == TRUE) {

	echo '<center><div class="bg-success text-white">';
	echo '<h3>Booking Cancelled Successfully...</h3>';
	echo '</div></center>';
	header("Refresh:1; myprofile.php");
} else {

	echo '<center><div class="bg-dark text-white">';
	echo '<h3>Booking Not Cancelled...</h3>';
	echo '</div></center>';
	header("Refresh:2; myprofile.php");
}


?>