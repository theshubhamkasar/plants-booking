<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>


<?php
    include("connection.php");

    if($_POST['update']) {
        
        $id = $_POST['id'];
		$name = $_POST['name'];
        $email = $_POST['email'];
        $soil = $_POST['password'];
        

		$query = "UPDATE user SET name = '$name' , email = '$email' , password = '$password' WHERE id = $id ";

		$update = mysqli_query($conn,$query);

		if($update) {
            echo '<center><div class="bg-success text-white">';
            echo "<h3>User Updated Successfully...</h3>";
            echo '</div></center>';
			header("Refresh:1; manageuser.php");

		} else {

            echo '<center><div class="bg-dark text-white">';
            echo "<h3>User Not Updated...</h3>";
            echo '</div></center>';
            header("Refresh:1; manageuser.php");
        
        }
	}

?>