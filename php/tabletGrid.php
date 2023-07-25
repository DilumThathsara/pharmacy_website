<?php
    include '../phpHandlers/dbh.config.php';
    include '../php/header.php';

    $message = array(); // Define an empty array to store messages

    if(isset($_POST['add_to_cart'])){
        $productNames = $_POST['productName']; // Modify variable name to match the form input name
        $productPrices = $_POST['productPrice']; // Modify variable name to match the form input name
        $productImages = $_POST['productImage']; // Modify variable name to match the form input name
        $productQuantity = 1;

        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE PName = '$productNames'"); // Modify column name to match the database table

        if(mysqli_num_rows($select_cart) > 0){
            $message[] = 'Product already added to cart.';
        }else{
            $insert_product = mysqli_query($conn, "INSERT INTO `cart`(PName, PPrice, PImage, quantity) VALUES ('$productNames','$productPrices','$productImages','$productQuantity')"); // Modify column names to match the database table
            $message[] = 'Product added to cart successfully!';
        }
    }
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="../css/items.css">
    <style type="text/css">
    </style>
</head>

<body>
<?php
    if(isset($message)){
        foreach($message as $msg){
            echo '<div class="message"><span>'.$msg.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        }
    }
?>

<form id="forml" name="forml" method="POST" action="">
    <div class="section">
        <div class="cards">
            <div class="new-arrival">
                <h1>Tablet</h1>
            </div>

            <?php
            $query = "SELECT * FROM `product` WHERE `productCategory` LIKE 'Tablets';";
            $queryRun = mysqli_query($conn, $query);

            if(mysqli_num_rows($queryRun) > 0) {
                while($row = mysqli_fetch_assoc($queryRun)){
                    $pImage = "../admin/phpHandlers/".$row['productImage'];
					$pName = $row["productName"];
					$pPrice = $row["productPrice"];
                    echo "
                    <div class='card'>
                        <form action='' method='post'>
                            <div class='image-section'>
                                <img src='$pImage'>
                            </div>
                            <div class='description'>
                                <h1 name='Pname'>$pName </h1>
                                <p><b name='price'>Rs.$pPrice</b></p>
								<input type='hidden' name='productName' value='".$row["productName"]."'>
								<input type='hidden' name='productPrice' value='".$row["productPrice"]."'>
                                <input type='hidden' name='productImage' value='".$row["productImage"]."'>
                            </div>
                            <br>
                            <input type='submit' class='button' value='add to cart' name='add_to_cart'>
                        </form>
                        <br>
                    </div>";
                }
            }
            ?>
        </div>
    </div>
</form>
<script src="js/script.js"></script>
</body>
</html>

<?php
    include './footer.php';
?>
