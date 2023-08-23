<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<?php
include("connection.php");
include("navbar.php");


?>

<div class="container">
    <div class="card border-dark bg-secondary mt-4 mb-2">
        <center>
            <h2 class="text-light">Manage User</h2>
        </center>
    </div>
</div>

<div class="container">
    <div class="col-lg-12">
        <br><br>
        <table class="table table-striped table-hover table-bordered ">

            <tr class="bg-dark text-white text-center">
                <th>User Name</th>            
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php

                 $query = "SELECT * FROM user";
                 $sql = mysqli_query($conn, $query);

                 while($row = mysqli_fetch_assoc($sql)) { ?>

                    <tr class="text-center">

                        <td><?php echo $row['name']; ?></td>
                        <td>
                            <button class="btn btn-primary"><a href="edit_user.php?id=<?php echo $row['id']; ?>" class="text-white">Edit</a>
								</button>
                        </td>

                        <td>
                            <button class="btn btn-danger"><a href="delete_user.php?id=<?php echo $row['id']; ?>" class="text-white">Delete</a>
								</button>
                        </td>



                    </tr>
             <?php   
            } ?>

        </table>
    </div>

</div>


<br>

	<center>
		<a href="admin_dashboard.php">
			<button class="btn btn-outline-primary">Back To Admin Dashboard </button>
		</a>
	</center>