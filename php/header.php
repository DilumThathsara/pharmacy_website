<?php
    session_start();

    // $loginPage = 'http://localhost/Thilaka_pharmacy/php/login.php';

    // if (!isset($_SESSION['email'])) {
    //     header("Location: $loginPage");
    //     exit();
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thilaka Pharmacy</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <script src="https://kit.fontawesome.com/fd20cad007.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
        <a href="../php/homePage.php"><img src= "../images/logo.png" width="80"></a>
            <!-- <a href="http://localhost/movie-booking-system/"><div class="icon"><h1>Cine<span>M</span>ix</h1></div></a>  -->
            </div> 
            <ol>
                
                <?php
                    if (isset($_SESSION['email'])) {
                        echo '<a href="http://localhost/Thilaka_pharmacy/php/homePage.php"><h5>Home</h5></a>';
                    }
                ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    if (isset($_SESSION['email'])) {
                        echo '<a href="http://localhost/Thilaka_pharmacy/php/category.php"><h5>Category</h5></a>';
                    }
                ?> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    if (isset($_SESSION['email'])) {
                        echo '<a href="http://localhost/Thilaka_pharmacy/php/contactus.php"><h5>Contact Us</h5></a>';
                    }
                ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    if (isset($_SESSION['email'])) {
                        echo '<a href="http://localhost/Thilaka_pharmacy/php/cart.php"><h5>Cart</h5></a>';
                    }
                ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    if(isset($_SESSION['email'])){
                        echo "<li><a href='http://localhost/Thilaka_pharmacy/php/profile.php' class='link'>Profile Page</a></li>";
                        echo "<li><a href='http://localhost/Thilaka_pharmacy/phpHandlers/dbh.logout.php' class='link'>Logout</a></li>";
                    }
                    
                    else{
                        echo "<li><a href='http://localhost/Thilaka_pharmacy/php/signUp.php' class='link'>Signup</a></li>";
                        echo "<li><a href='http://localhost/Thilaka_pharmacy/php/login.php' class='link'>Login</a></li>";
                    }
                ?>
                
                
            </ol>
        </nav>
    </header>
</body>
</html>