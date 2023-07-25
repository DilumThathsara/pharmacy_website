<?php
    include './dbh.config.php';

    if(isset($_GET['deleteProductID'])){
        $id = $_GET['deleteProductID'];

        $query = "DELETE from `product` WHERE productID = $id";
        $queryRun  = mysqli_query($conn, $query);

        if($queryRun){
            header("Location: ../php/admin.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>