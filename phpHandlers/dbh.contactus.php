<?php
include 'dbh.config.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];


    $query = "INSERT INTO `contactus`( `Fullname`, `Emaill`, `Mobile_number`, `Message`) VALUES ('$name','$email','$mobile','$message')";
    $queryRun = mysqli_query($conn, $query);

            if($queryRun){
                header("Location: ../php/contactus.php");
            }
            else{
                die(mysqli_error($conn));
            }
}

?>