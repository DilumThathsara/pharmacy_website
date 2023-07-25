<?php
    include '../phpHandlers/dbh.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order List</title>
  <link rel="stylesheet" href="../css/admin.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  

</head>
<body>
    <?php
        include '../php/sidebar.php';
    ?>
    <div class="content">
    <div class="container-fluid text-center">
  <div><h1> Order List</h1></div>
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
  
  <div>
    <table class="table table-bordered">
      <thead class="thead-dark">
      <tr>
        
        <th>customer Name</th>
        <th> customer Phone number </th>
        <th> customer Email</th>
        <th> Payment Method </th>
        <th> flat </th>
        <th> street </th>
        <th> city </th>
        <th> state </th>
        <th> Postal code </th>
        <th> Order Products </th>
        <th> Total Price </th>
    
      </tr>
      <?php
                    $sql = "SELECT * FROM `order`";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['orderID'];
                            echo "
                                <tr>
                                    <td>".$row['orderName']."</td>
                                    <td>".$row['orderNumber']."</td>
                                    <td>".$row['orderEmaill']."</td>
                                    <td>".$row['method']."</td>
                                    <td>".$row['flat']."</td>
                                    <td>".$row['street']."</td>
                                    <td>".$row['city']."</td>
                                    <td>".$row['state']."</td>
                                    <td>".$row['pin_code']."</td>
                                    <td>".$row['total_products']."</td>
                                    <td>".$row['total_price']."</td>
                                    
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