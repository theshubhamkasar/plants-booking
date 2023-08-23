<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>

<?php

include('../connection.php');

$uname = $_POST['uname'];
$email = $_POST['email'];
$name = $_POST['plantname'];
$number = $_POST['number'];
$address = $_POST['address'];



$query = "INSERT INTO booking(username, nameofplant, numberofplants, deliveryaddress, email) VALUES ('$uname','$name','$number','$address','$email')";
$sql = mysqli_query($conn, $query);


if ($sql) {

	echo '<center><div class="bg-success text-white">';
	echo "<h3>Order Booked Successfully...</h3>";
	echo '</div></center>';
	header("Refresh:1; ../myprofile.php");


} else {

	echo '<center><div class="bg-dark text-white">';
	echo "<h3>Order Not Booked...</h3>";
	echo '</div></center>';
	header("Refresh:1; ../booking.php");

}

?>