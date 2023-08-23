<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>

    <?php
        session_start();

        if(isset($_SESSION['user'])) {
            include("navbar.php");
        } else {
            include("index_navbar.php");
        }
    
    ?>


    

    <!-- heading start here -->
    <div class="card shadow bg-success">
        <div class="card-body">

            <center>
                <b>
                    <h1 class="card-title text-dark mt-4 mb-4">plant booking</h1>

                </b>

                <h3 class="card-title text-white mt-4 mb-4">Save Plant, Save Earth...</h3>

            </center>

        </div>

    </div>

    <!-- heading end here -->


    <br>

    <!-- cart starts here -->
    <!-- <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <div class="card  border-secondary shadow my-2" style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/1.jpeg" alt="Card image cap">
                        </center>

                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Pista</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Pistacia vera</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card border-secondary shadow my-2 " style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/2.jpeg" alt="Card image cap">
                        </center>

                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Wallnut</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Juglans</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card border-secondary shadow my-2 " style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/3.jpeg" alt="Card image cap">
                        </center>

                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Cashew</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Anacardium occidentale</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card border-secondary shadow my-2 " style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/4.jpeg" alt="Card image cap">
                        </center>

                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Almond</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Prunus dulcis</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card border-secondary shadow my-2" style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/4.jpeg" alt="Card image cap">
                        </center>

                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Almond</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Prunus dulcis</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card border-secondary shadow my-2 " style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/4.jpeg" alt="Card image cap">
                        </center>

                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Almond</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Prunus dulcis</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card border-secondary shadow my-2 " style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/2.jpeg" alt="Card image cap">
                        </center>

                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Wallnut</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Juglans</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card border-secondary shadow my-2 " style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/2.jpeg" alt="Card image cap">
                        </center>
                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Wallnut</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Juglans</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card border-secondary shadow my-2 " style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/2.jpeg" alt="Card image cap">
                        </center>

                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Wallnut</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Juglans</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card border-secondary shadow my-2 " style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/2.jpeg" alt="Card image cap">
                        </center>

                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Wallnut</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Juglans</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card border-secondary shadow my-2 " style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/2.jpeg" alt="Card image cap">
                        </center>

                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Wallnut</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Juglans</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card border-secondary shadow my-2 " style="width: 17rem; height: 25rem">
                    <div class="card-body">
                        <center>
                            <img style="width:230px; height:180px" class="card-img-top" src="img/2.jpeg" alt="Card image cap">
                        </center>

                        <br>
                        <p class="card-text text-left"><b>Name : </b><br>Wallnut</p>
                        <p class="card-text text-left"><b>Scientific Name : </b><br>Juglans</p>

                        <center>
                            <a href="booking.php" class="btn btn-secondary">Book</a>
                        </center>
                    </div>
                </div>
            </div>



        </div>


    </div> -->


    <?php
    include("connection.php");

    $query = "SELECT * FROM addplant";
    $sql = mysqli_query($conn, $query);

    ?>



    <div class="container">
        <div class="row">

            <?php

            while ($row = mysqli_fetch_array($sql)) { ?>

                <div class="col-sm-3">
                    <div class="card border-secondary shadow my-2 " style="width: 17rem; height: 25rem">
                        <div class="card-body">
                            <center>
                                <img style="width:230px; height:180px" class="card-img-top" src="<?php echo $row['image']; ?>">
                            </center>
                            
                            <br>
                            <p class="card-text text-left"><b>Name : </b><br><?php echo $row['name']; ?></p>
                            <p class="card-text text-left"><b>Scientific Name : </b><br><?php echo $row['sci']; ?></p>

                            <center>
                                <a href="booking.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">Book</a>
                            </center>
                        </div>
                    </div>
                </div>
                <?php 
            }?>

        </div>
    </div>



    <!-- cart ends here -->

    <!-- footer background image -->
    <img style="width: 1350px;" src="img/index.jpg">
    <!-- footer background image -->





</body>

</html>
