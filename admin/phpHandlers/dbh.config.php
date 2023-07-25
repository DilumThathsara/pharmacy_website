<?php
    // DB Connection
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "thilaka_phamacy";

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

    if(!$conn){
        echo "<script> alert('Connection Failed!') </script>";
    }

?>