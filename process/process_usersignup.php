<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>


<?php

    include("../connection.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
    $sql = mysqli_query($conn,$query);

    if($sql) {
        echo '<center><div class="bg-success text-white">';
        echo "<h3>User Registered Successfully...</h3>";
        echo '</div></center>';
        header("Refresh:1; ../user_login.php");

    } else {

        echo '<center><div class="bg-dark text-white">';
        echo "<h3>User Not Registered...</h3>";
        echo '</div></center>';
        header("Refresh:2; ../user_signup.php");
        
    }





?>