<?php
include("connection.php");
include("navbar.php");


if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$query = "SELECT * FROM addplant WHERE id = $id ";

$sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="row">

        <div class="col-lg-3">
        </div>

        <div class="col-lg-6">
            <div class="card border-success container shadow mt-5 mb-5">

                <!-- image start here -->
                <center>
                    <img src="img/addplant.jpg" style="width: 360px;">
                </center>
                <!-- image end here -->

                <center>
                    <h1 class="mb-5"><b>Plant Information</b></h1>
                </center>
                
                <form action="update_plant.php" method="POST" autocomplete="off">

                    <div class="form-group">
						<input type="hidden" name="id" class="form-control" placeholder="Enter id" value="<?php echo $row['id']; ?>">
					</div>

                    <div class="form-group">
                        <label>Name Of Plant</label>
                        <input type="text" name="name" class="form-control" placeholder="enter plant name" value="<?php echo $row['name']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Scientific Name</label>
                        <input type="text" name="sci" class="form-control" placeholder="enter scientific name" value="<?php echo $row['sci']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Required Soil</label>
                        <input type="text" name="soil" class="form-control" placeholder="enter soil variety" value="<?php echo $row['soil']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Required Water</label>
                        <input type="text" name="water" class="form-control" placeholder="enter water in liter" value="<?php echo $row['water']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Required Climate</label>
                        <input type="text" name="climate" class="form-control" placeholder="enter climate" value="<?php echo $row['climate']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Required fertilizer</label>
                        <input type="text" name="fertilizer" class="form-control" placeholder="enter fertilizers" value="<?php echo $row['fertilizer']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Max Height</label>
                        <input type="text" name="height" class="form-control" placeholder="enter height in meter" value="<?php echo $row['height']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Famous For</label>
                        <input type="text" name="famous" class="form-control" placeholder="enter here" value="<?php echo $row['famous']; ?>">
                    </div>

                   
                    <center>
                        <div class="form-group">
                            <button type="submit" name="update" value="submit" class="btn btn-outline-success">UPDATE</button>
                        </div>
                    </center>

                </form>
            </div>

        </div>

        <div class="col-lg-3">
        </div>

    </div>

</body>

</html>