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
                    <img src="../images//log4.png" alt="logo">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-12 login_form " >
                    
                        <div class="row">
                            <h2>&nbsp;&nbsp;&nbsp;&nbsp; Log In</h2>
                        </div>
                            <form action="../phpHandlers/dbh.login.php" method="POST" class="form-group">
                            
                                <div class="row">
                                    <input type="text" name="email"  class="form__input"
                                        placeholder="email">
                                
                                    
                                    <input type="password" name="password" class="form__input"
                                        placeholder="Password">
                            
                                    <!-- <button type="button" id="login" name="login" class="btn">Login</button> -->
                                    <input type="submit" name="submit" value="Login" class="btn">
                                </div>
                                <a href="signup2.php" ><h4>Don't you have an account?</h4></a>
                            </form>
                </div>
            </div>
        </div>
        <div class="custom-message">
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<script>alert('☹ Fill all the fields! ☹');</script>";
                    }
                    if($_GET["error"] == "loginFailed"){
                        // echo "<p>Incorrect Username/Email</p>";
                        echo "<script>alert('☹ Incorrect Username/Email! ☹');</script>";
                    }
                    if($_GET["error"] == "wrongpassword"){
                        // echo "<p>Incorrect Password</p>";
                        echo "<script>alert('☹ Incorrect Password! ☹');</script>";
                    }
                }
            ?>
        </div>
</body>
</html>

<?php
    include './footer.php';
?>