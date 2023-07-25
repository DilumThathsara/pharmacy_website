<?php
    include '../phpHandlers/dbh.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us List</title>
  <link rel="stylesheet" href="../css/admin.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  

</head>
<body>
    <?php
        include '../php/sidebar.php';
    ?>
    <div class="content">
    <div class="container-fluid text-center">
  <div><h1> Contact Us List</h1></div>
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
  
  <div>
    <table class="table table-bordered">
      <thead class="thead-dark">
      <tr>
        
        <th>Full name</th>
        <th> Emaill </th>
        <th> Mobile Number</th>
        <th> Message </th>
    
      </tr>
      <?php
                    $sql = "SELECT * FROM `contactus`";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['contactusID'];
                            echo "
                                <tr>
                                    <td>".$row['Fullname']."</td>
                                    <td>".$row['Emaill']."</td>
                                    <td>".$row['Mobile_number']."</td>
                                    <td>".$row['Message']."</td>
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