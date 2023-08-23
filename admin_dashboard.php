<?php
session_start();
include("connection.php");
include("navbar.php");

if (!isset($_SESSION['admin'])) {
    header("Refresh:0; adminlogin.php");
    die();
}


?>

<?php

$query = "SELECT * FROM booking ";

$sql = mysqli_query($conn, $query);

$rows = mysqli_num_rows($sql);

?>

<?php

$query2 = "SELECT * FROM booking ";

$sql2 = mysqli_query($conn, $query2);


$total_count = 0;

while ($total = mysqli_fetch_row($sql2)) {
    $total_count++;
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <a href="addplant.php">
                    <button class="btn btn-outline-success btn-lg">Add Plant</button>
                </a>
            </div>

            <div class="col-lg-6 mt-5">
                <a href="manageplant.php">
                    <button class="btn btn-outline-dark btn-lg">Manage Plant</button>
                </a>
            </div>


        </div>
    </div>

    <div class="conatiner">
        <div class="row">
            <div class="col-lg-5 mb-3 mt-3"></div>

            <div class="col-lg-2 mb-3 mt-3">
                <a href="manageuser.php">
                    <button class="btn btn-outline-warning btn-lg ml-5">Manage User</button>
                </a>
            </div>

            <div class="col-lg-5 mb-3 mt-3"></div>

        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="card shadow">
                    <center>
                        <div class="card-header text-info">
                            <h3><b>Total Bookings = <?php echo $total_count; ?></b></h3>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>

    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">

                <center>
                    <div class="text-secondary">
                        <h3><b>-: All Bookings :-</b></h3>
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
                <table class=" mb-5 table table-striped table-hover table-bordered ">

                    <tr class="bg-dark text-white text-center">
                        <th>User Name</th>
                        <th>Plant Name</th>
                        <th>Number Of Plants</th>
                        <th>Delivery Address</th>
                    </tr>


                    <?php


                    while ($row = mysqli_fetch_row($sql)) { ?>

                        <tr class="text-center">
                            <td><?php echo $row['1']; ?></td>
                            <td><?php echo $row['2']; ?></td>
                            <td><?php echo $row['3']; ?></td>
                            <td><?php echo $row['4']; ?></td>


                        </tr>

                <?php }
                } ?>

                </table>
            </div>

        </div>

</body>

</html>

<style>
    .btn-outline-success {
        float: right;
    }

    .btn-outline-dark {
        float: left;
    }
</style>