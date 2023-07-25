<?php
include '../php/header.php';
include '../phpHandlers/dbh.config.php';

if (isset($_POST['update_update_btn'])) {
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE cartID = '$update_id'");
    if ($update_quantity_query) {
        header('location:cart.php');
    }
}

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE cartID = '$remove_id'");
    header('location:cart.php');
}

if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "DELETE FROM `cart`");
    header('location:cart.php');
}

if(isset($_POST['btn'])){
    $OProductNames = $_POST['productName']; 
    $OProductPrices = $_POST['productPrice']; 
    $OProductImages = $_POST['productImage'];
    $OProductQuantity = $_POST['update_quantity'];

    $select_cart = mysqli_query($conn, "SELECT * FROM `order` WHERE OPName = '$OProductNames'"); 

    if(mysqli_num_rows($select_cart) > 0){
        $message[] = 'Product already added to cart.';
    }else{
        $insert_product = mysqli_query($conn, "INSERT INTO `order`(`OPName`, `OPPrice`, `OPImage`, `OPQuantity`) VALUES ('$OProductNames','$OProductPrices','$OProductImages','$OProductQuantity')"); 
        $message[] = 'Product added to cart successfully!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/cartStyle.css">

</head>

<body>

    <div class="container">

        <section class="shopping-cart">

            <h1 class="heading">shopping cart</h1>

            <table>

                <thead>
                    <th>Image</th>
                    <th>name</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>total price</th>
                    <th>action</th>
                </thead>

                <tbody>

                    <?php

                    $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                    $grand_total = 0;
                    if (mysqli_num_rows($select_cart) > 0) {
                        while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                            $price = floatval($fetch_cart['PPrice']);
                            $quantity = intval($fetch_cart['quantity']);
                            if (!is_numeric($price) || !is_numeric($quantity)) {
                                continue;
                            }
                            $sub_total = $price * $quantity;
                            $grand_total += $sub_total;
                    ?>

                            <tr>
                            <td><img src="../admin/phpHandlers/<?php echo $fetch_cart['PImage']; ?>" height="100" alt=""></td>
                                <td><?php echo $fetch_cart['PName']; ?></td>
                                <td>Rs. <?php echo number_format($price); ?>/-</td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['cartID']; ?>">
                                        <input type="number" name="update_quantity" min="1" value="<?php echo $quantity; ?>">
                                        <input type="submit" value="update" name="update_update_btn">
                                        <input type='hidden' name='productName' value='".$row["productName"]."'>
				                        <input type='hidden' name='productPrice' value='".$row["productPrice"]."'>
                                        <input type='hidden' name='productImage' value='".$row["productImage"]."'>
                                        
                                        
                                    </form>
                                </td>
                                <td>Rs. <?php echo number_format($sub_total); ?>/-</td>
                                <td><a href="cart.php?remove=<?php echo $fetch_cart['cartID']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                    <tr class="table-bottom">
                        <!-- <td><a href="products.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td> -->
                        <td colspan="3">grand total</td>
                        <td>Rs. <?php echo number_format($grand_total); ?>/-</td>
                        <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
                        <td></td>
                    </tr>
                </tbody>

            </table>

            <div class="checkout-btn">
            <a href="../php/checkOut.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
            <!-- <a href="cart.php?btn" class="btn" name='btn';>Place Your Order</a> -->
            </div>

        </section>

    </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>

<?php
include '../php/footer.php';
?>
