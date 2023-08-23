<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>

<body>


	<?php

	include('connection.php');

	if (isset($_POST['submit'])) {


		$name = $_POST['name'];
		$sci = $_POST['sci'];
		$soil = $_POST['soil'];
		$water = $_POST['water'];
		$climate = $_POST['climate'];
		$fertilizer = $_POST['fertilizer'];
		$height = $_POST['height'];
		$famous = $_POST['famous'];
		$file = $_FILES['file'];


		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];


		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		
		$allowed = array('jpg', 'jpeg', 'png');

		if (in_array($fileActualExt, $allowed)) {
				if($fileError === 0) {
					if($fileSize < 10000000) {    // 10 mb

						$fileDestination = 'upload/'.$fileName;

						move_uploaded_file($fileTmpName, $fileDestination);

					} else {
						echo "Your file is too big!";
					}
				} else {
					echo "There was an error uploading your file!";
				}
			} else {
				echo "You cannot upload files of this type!";
			}


		$query = "INSERT INTO addplant(name,sci,soil,water,climate,fertilizer,height,famous,image) VALUES ('$name','$sci','$soil','$water','$climate','$fertilizer','$height','$famous','$fileDestination')";
		$sql = mysqli_query($conn, $query);


		if ($sql) {

			echo '<center><div class="bg-success text-white">';
			echo "<h3>Plant Added Successfully...</h3>";
			echo '</div></center>';
			header("Refresh:1; index.php");
		} else {

			echo '<center><div class="bg-dark text-white">';
			echo "<h3>Plant Not Added...</h3>";
			echo '</div></center>';
			header("Refresh:1; addplant.php");
		}

	}
	?>


</body>

</html>