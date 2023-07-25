<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/addProduct.css">
</head>
<body>

    <?php
        include '../php/sidebar.php';
    ?>

    <div class="content">
        <div class="title">
            <h2>Add new Product</h2>
        </div>
        <form action="../phpHandlers/dbh.addProduct.php" class="form-group" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label>Product Name</label>
                <input  name="productName" placeholder="Product Name" class="form-control"  type="text">
            </div>
            <div class="input-group">
                <label>Product Price</label>
                <input name="productPrice" placeholder="Product Price" class="form-control"  type="text">
            </div>
            <div class="input-group">
                <label>Category</label>
                <select name="productCategory" class="form-control selectpicker" >
                        <option value=" " >Please select Category</option>
                        <option>Tablets</option>
                        <option>Syrups</option>
                        <option >Cream</option>
                        <option >Other</option>
                </select>
            </div>
            <div class="input-group">
                <label>Upload Image</label>
                <input type="file" name="productImage">
            </div>
            <input type="submit" name="submit" value="Add Product" class="btn">
        </form>
        
    </div>
    
</body>
</html>