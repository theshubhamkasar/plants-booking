<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>


<?php
    include("connection.php");

    if($_POST['update']) {
        
        $id = $_POST['id'];
		$name = $_POST['name'];
        $sci = $_POST['sci'];
        $soil = $_POST['soil'];
        $water = $_POST['water'];
        $climate = $_POST['climate'];
        $fertilizer = $_POST['fertilizer'];
        $height = $_POST['height'];
        $famous = $_POST['famous'];
        

		$query = "UPDATE addplant SET name = '$name' , sci = '$sci' , soil = '$soil' , water = '$water' , climate = '$climate' , fertilizer = '$fertilizer' , height = '$height' , famous = '$famous' WHERE id = $id ";

		$update = mysqli_query($conn,$query);

		if($update) {
            echo '<center><div class="bg-success text-white">';
            echo "<h3>Plant Updated Successfully...</h3>";
            echo '</div></center>';
			header("Refresh:1; index.php");

		} else {

            echo '<center><div class="bg-dark text-white">';
            echo "<h3>Plant Not Updated...</h3>";
            echo '</div></center>';
            header("Refresh:1; addplant.php");
        
        }
	}

?>