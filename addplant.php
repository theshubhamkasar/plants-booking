<?php
include("connection.php");
include("navbar.php");


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
                
                <form action="process_addplant.php" method="POST" autocomplete="off" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Name Of Plant</label>
                        <input type="text" name="name" class="form-control" required="true" placeholder="enter plant name">
                    </div>

                    <div class="form-group">
                        <label>Scientific Name</label>
                        <input type="text" name="sci" class="form-control" required="true" placeholder="enter scientific name">
                    </div>

                    <div class="form-group">
                        <label>Required Soil</label>
                        <input type="text" name="soil" class="form-control" required="true" placeholder="enter soil variety">
                    </div>

                    <div class="form-group">
                        <label>Required Water</label>
                        <input type="text" name="water" class="form-control" required="true" placeholder="enter water in liter">
                    </div>

                    <div class="form-group">
                        <label>Required Climate</label>
                        <input type="text" name="climate" class="form-control" required="true" placeholder="enter climate">
                    </div>

                    <div class="form-group">
                        <label>Required fertilizer</label>
                        <input type="text" name="fertilizer" class="form-control" required="true" placeholder="enter fertilizers">
                    </div>

                    <div class="form-group">
                        <label>Max Height</label>
                        <input type="text" name="height" class="form-control" required="true" placeholder="enter height in meter">
                    </div>

                    <div class="form-group">
                        <label>Famous For</label>
                        <input type="text" name="famous" class="form-control" required="true" placeholder="enter here">
                    </div>

                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" name="file" class="form-control" required="true">
                    </div>


                    <center>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-outline-success">ADD</button>
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