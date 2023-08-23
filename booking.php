<?php
    session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>

<body>


    <?php
    include("connection.php");
    include("navbar.php");


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $sql = "SELECT * FROM addplant WHERE id = $id ";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

    
    ?>

    <?php
    
    $logged_user = $_SESSION['user'];

	$query1 = "SELECT * FROM user WHERE email='$logged_user' ";

	$sql1 = mysqli_query($conn, $query1);


	$row1 = mysqli_fetch_row($sql1);

    
    ?>



    <!-- plant info card start here -->

    <div class="container">
        <div class="card border-success shadow mt-5 mb-0 ">
            <div class="card-header text-center text-light bg-success">
                <h2>Information Required To Plant <?php echo $row['name']; ?> Tree</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-body">
                        <h6><b>Name : </b></h6><?php echo $row['name']; ?> <br><br>
                        <h6><b>Scientific Name : </b></h6><?php echo $row['sci']; ?> <br><br>
                        <h6><b>Required Soil : </b></h6><?php echo $row['soil']; ?> <br><br>
                        <h6><b>Required water : </b></h6><?php echo $row['water']; ?> Liter <br><br>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card-body">
                        <h6><b>Required Climate : </b></h6><?php echo $row['climate']; ?> <br><br>
                        <h6><b>Required Fertilizers : </b></h6><?php echo $row['fertilizer']; ?> <br><br>
                        <h6><b>Max Height : </b></h6><?php echo $row['height']; ?> Meter <br><br>
                        <h6><b>Famous For : </b></h6><?php echo $row['famous']; ?> <br><br>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <!-- plant info card end here -->

    <br><br>

    <!-- booking form start here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>


            <div class="col-lg-6">
                <div class="card mb-5 shadow container border-secondary">

                    <!-- image start here -->
                    <center>
                        <img src="img/booking.jpg" style="width: 360px;">
                    </center>
                    <!-- image end here -->

                    <center>
                        <h2 class="mb-3"><b>Book a plant</b></h2>
                    </center>

                    <form action="process/process_booking.php" method="POST" autocomplete="off">
                        
                        <div class="form-group">
                            <input type="hidden" name="uname" class="form-control" value="<?php echo $row1[1]; ?>">
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="email" class="form-control" value="<?php echo $row1[2]; ?>">
                        </div>

                        <div class="form-group">
                            <label>Name Of Plant</label>
                            <input type="text" name="plantname" placeholder="enter plant name" class="form-control" value="<?php echo $row['name']; ?>" required="true">
                        </div>

                        <div class="form-group">
                            <label>Number Of Plants</label>
                            <input type="number" name="number" placeholder="enter number of plants" class="form-control" required="true">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="enter delivery address" class="form-control" required="true">
                        </div>

                        <center>
                            <div class="form-group">
                                <button class="btn btn-outline-success">Order</button>
                            </div>
                        </center>
                    </form>

                </div>
            </div>


            <div class="col-lg-3">
            </div>

        </div>
    </div>

    <!-- booking form end here -->



</body>

</html>