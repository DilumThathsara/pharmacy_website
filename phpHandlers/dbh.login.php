<?php
    include './dbh.config.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once './dbh.functions.php';

        if(emptyInputLogin($email, $password) !== false){
            header('location: ../php/login.php?error=emptyinput');
            exit();
        }

        loginUser($conn, $email, $password);
    }
    else{
        header('location: ../php/login.php');
        exit();
    }

?>