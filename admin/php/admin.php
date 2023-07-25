<?php
    include '../phpHandlers/dbh.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Users</title>
  <link rel="stylesheet" href="../css/admin.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  

</head>

<body>
    <?php
        include '../php/sidebar.php';
    ?>
    <div class="content">
    <div class="container-fluid text-center">
  <div><h1> Products List</h1></div>
 
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
  
  <div>
    <table class="table table-bordered">
      <thead class="thead-dark">
      <tr>
        
        <th>Image</th>
        <th> Product Name </th>
        <th> Category</th>
        <th> Price </th>
        
        <th></th>
      </tr>
      <?php
                    $sql = "SELECT * FROM product";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['productID'];
                            echo "
                                <tr>
                                    <td>".$row['productImage']."</td>
                                    <td>".$row['productName']."</td>
                                    <td>".$row['productCategory']."</td>
                                    <td>".$row['productPrice']."</td>
                                    <td>
                                        <button class='del-btn'><a href='http://localhost/Thilaka_pharmacy/admin/phpHandlers/dbh.updateProduct.php?updateProductId=".$id."'>Update</a></button>
                                        <button class='del-btn'><a href='http://localhost/Thilaka_pharmacy/admin/phpHandlers/dbh.deleteProduct.php?deleteProductID=".$id."'>Delete</a></button>
                                    </td>
                                </tr>
                            ";
                        }
                    }
                ?>
      </thead>
      
    </table>
  </div>
</div>

    </div>

</body>
</html>