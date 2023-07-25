<?php
    include '../phpHandlers/dbh.config.php';
    include '../php/header.php';
    $id = $_SESSION['userID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Page</title>
    <link rel="stylesheet" href="../css//profile.css">
</head>
<body>
    
    <div class="hero-image">
    <img src="../images/profile/banner.jpg" alt="Girl in a jacket" width="100%" height="350">
        <div class="hero-text">
          <h1>Welcome to Thilaka Pharmacy</h1>
        </div>
    </div>

    <div class="user-profile">
        <span>Welcome  <?php echo $_SESSION['fullName'] ?></span>
    </div>

    <div class="content">
        <table class="user-details">
            <tr>
                <th>Username</th>
                <td><?php echo $_SESSION['username'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $_SESSION['email'] ?></td>
            </tr>
        </table>
    </div>

</body>
</html>

<?php
    include '../php/footer.php';
?>