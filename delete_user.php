<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<?php

    include("connection.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM user WHERE id = $id";
        $sql = mysqli_query($conn,$query);

        if($sql) {
            echo '<center><div class="bg-success text-white">';
            echo "<h3>User Deleted Successfully...</h3>";
            echo '</div></center>';
            header("Refresh:1; manageuser.php");

        } else {

            echo '<center><div class="bg-dark text-white">';
            echo "<h3>User Not Deleted...</h3>";
            echo '</div></center>';
            header("Refresh:1; manageuser.php");
        
        }




    }



?>