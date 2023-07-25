<?php
    include '../php/header.php';
?>
<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <title>Thilaka Pharmacy</title>
    <link rel="stylesheet" href="../css/login.css">

</style>  
</head> 
<body>
    
        <div class="container-fluid">
            <div class="row main-content bg-success text-center">
                <div class="col-md-4 text-center company__info" >
                    <img src="../images//signup.png" alt="logo">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-12 login_form " >
                    
                        <div class="row">
                            <h2>&nbsp;&nbsp;&nbsp;&nbsp; Registration</h2>
                        </div>
                            <form action="../phpHandlers/dbh.signup.php" method="POST" class="form-group">
                            
                                <div class="row">
                                    <input type="text" name="fullName"  class="form__input"
                                        placeholder="Full Name">
                                
                                    <input type="text" name="username" class="form__input"
                                        placeholder="Username">

                                    <input type="email" name="email" class="form__input"
                                        placeholder="Email">

                                    <input type="password" name="password" class="form__input"
                                        placeholder="Password">

                                    <input type="password" name="cpassword" class="form__input"
                                        placeholder="Confirm Password">
                            
                                    <!-- <button type="button" id="login" name="login" class="btn">Login</button> -->
                                    <input type="submit" name="submit" value="Register" class="btn">
                                    <a href="./login.php" ><h4>I have an account</h4></a>
                                </div>
                            </form>
                </div>
            </div>
        </div>
        <div class="custom-message">
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            // echo "<p>☹️ Fill all the fields! ☹️</p>";
                            echo "<script>alert('☹ Fill all the fields! ☹');</script>";
                        }
                        if($_GET["error"] == "invalidusername"){
                            // echo "<p>☹️ Invalid Username! ☹️</p>";
                            echo "<script>alert('☹ Invalid Username! ☹');</script>";
                        }
                        if($_GET["error"] == "invalidemail"){
                            // echo "<p>☹️ Invalid Email! ☹️</p>";
                            echo "<script>alert('☹ Invalid Email! ☹');</script>";
                        }
                        if($_GET["error"] == "passwordnotmatch"){
                            echo "<script>alert('☹ Passwords are not match! ☹');</script>";
                        }
                        if($_GET["error"] == "usernametaken"){
                            echo "<script>alert('☹ Username is taken! ☹');</script>";
                        }
                        if($_GET["error"] == "emailtaken"){
                            echo "<script>alert('☹ Email is taken! ☹');</script>";
                        }
                        if($_GET["error"] == "mobilenumbertaken"){
                            echo "<script>alert('☹ Mobile Number is taken! ☹');</script>";
                        }
                    }
                ?>
            </div>
</body>
</html>

<?php
    include './footer.php';
?>