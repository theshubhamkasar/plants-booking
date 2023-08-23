<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<?php

include('../connection.php');

session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * FROM admin WHERE login_email = '$email' AND login_password = '$password'";

$sql = mysqli_query($conn, $query); //fire the query

$count = mysqli_num_rows($sql); // to count the rows present in table


if ($count > 0) {

	$_SESSION['admin'] = $email; //session variables are set

	echo '<center><div class="bg-success text-white">';
	echo "<h3>Login Successfull...</h3>";
	echo '</div></center>';
	header("Refresh:1; ../admin_dashboard.php");

} else {

	echo '<center><div class="bg-dark text-white">';
	echo "<h3>Invalid Credentials...</h3>";
	echo '</div></center>';
	header("Refresh:2; ../admin_login.php");
	
}



?>