<?php
    include './dbh.config.php';

    if(isset($_POST['submit'])){
        $fullName = $_POST['fullName'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        require_once './dbh.functions.php';

        if(emptyInputSignup($fullName,$username, $email, $password, $cpassword) !== false){
            header('location: ../php/signUp.php?error=emptyinput');
            exit();
        }

        if(invalidUsername($username) !== false){
            header('location: ../php/signup.php?error=invalidusername');
            exit();
        }

        if(invalidEmail($email) !== false){
            header('location: ../php/signUp.php?error=invalidemail');
            exit();
        }

        if(passwordMatch($password, $cpassword) !== false){
            header('location: ../php/signUp.php?error=passwordnotmatch');
            exit();
        }

        if(usernameExists($conn, $username) !== false){
            header('location: ../php/signup.php?error=usernametaken');
            exit();
        }

        if(emailExists($conn, $email) !== false){
            header('location: ../php/signUp.php?error=emailtaken');
            exit();
        }


        createUser($conn, $fullName,$username, $email, $password);

    }
    else{
        header('location: ../php/signUp.php');
        // print('hii');
        exit();
    }
?>