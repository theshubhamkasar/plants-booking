<?php
session_start();
include("connection.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$query = "SELECT * FROM user WHERE id = $id ";

$sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="row">
        <div class="col-lg-3">

        </div>


        <div class="col-lg-6">
            <!-- sign up form start -->

            <div class="card shadow container mt-5 mb-5">

                

                <center>
                    <h2 class="mt-4 mb-4">UPDATE USER INFO</h2>
                </center>

                <!-- Form starts here -->

                <form action="update_user.php" method="POST" autocomplete="off">

                    <div class="form-group">
						<input type="hidden" name="id" class="form-control" placeholder="Enter id" value="<?php echo $row['id']; ?>">
					</div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" value="<?php echo $row['name']; ?>" required="true">
                    </div>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php echo $row['email']; ?>" required="true">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo $row['password']; ?>" required="true">
                    </div>

                    <center>
                        <div class="form-group">
                            <button type="submit" name="update" value="submit" class="btn btn-outline-info">Update</button>
                        </div>
                    </center>

                </form>


                <!-- form ends here -->
            </div>

            <!-- sign up form end -->

        </div>


        <div class="col-lg-3">

        </div>

    </div>




</body>

</html>