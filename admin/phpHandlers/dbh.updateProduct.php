<?php
    include './dbh.config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CineMix - Dashboard</title>
    <link rel="stylesheet" href="../css/addProduct.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

    <?php

        $id = $_GET['updateProductId'];
        $query = "select * from `product` where productID = '$id';";
        $queryRun = mysqli_query($conn, $query);

        if($queryRun){
            $row = mysqli_fetch_assoc($queryRun);
            $mProductName = $row['productName'];
            $mProductPrice = $row['productPrice'];
            $mProductCategory = $row['productCategory']; 
        }

        echo "
        <form class='well form-horizontal' action='' method='POST'  id='contact_form' enctype='multipart/form-data'>
        <fieldset>
    
        <legend>Update $mProductName Product</legend>
    
    
        <div class='form-group'>
          <label class='col-md-4 control-label thead-dark'>Product Name</label>  
          <div class='col-md-4 inputGroupContainer'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
              <input  name='productName' placeholder=".$mProductName." class='form-control'  type='text'>
            </div>'
          </div>
        </div>
    
    
        <div class='form-group'>
          <label class='col-md-4 control-label' >Product Price</label> 
            <div class='col-md-4 inputGroupContainer'>
              <div class='input-group'>
              <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
              <input name='productPrice' placeholder=".$mProductPrice." class='form-control'  type='text'>
              </div>
            </div>
        </div>
    
        <div class='form-group'> 
          <label class='col-md-4 control-label'>Category</label>
          <div class='col-md-4 selectContainer'>
            <div class='input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-list'></i></span>
            <select name='productCategory' class='form-control selectpicker'>
              <option value='' >".$mProductCategory."</option>
              <option>Tablets</option>
              <option>Syrups</option>
              <option >Cream</option>
              <option >Other</option>
            </select>
            </div>
          </div>
        </div>
    
    
          <div class='form-group'>
            <label class='col-md-4 control-label'>Upload Image</label>  
              <div class='col-md-4 inputGroupContainer'>
              <div class='input-group'>
                  <span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
                  <input type='file' name='productImage'>
              </div>
            </div>
          </div>
    
          <div class='form-group'>
          <label class='col-md-4 control-label'></label>
          <div class='col-md-4'>
          <input type='submit' name='submit' value='Update' class='button'>
    
        </div>
        </div>
    
        </fieldset>
      </form>
            
        ";

        if(isset($_POST['submit'])){
            $productName = $_POST['productName'];
            $productPrice = $_POST['productPrice'];
            $productCategory = $_POST['productCategory'];
    
            //for movie Image
            $file1 = $_FILES['productImage'];
            $fileTempName1 = $_FILES['productImage']['tmp_name'];
            $fileName1 = $_FILES['productImage']['name'];
            $fileError1 = $_FILES['productImage']['error'];
            $fileName_separate1 = explode('.', $fileName1);
            $fileName_extension1 = strtolower(end($fileName_separate1));
    
            $extension = array('jpg','jpeg','png');
    
            if(in_array($fileName_extension1, $extension)){
                $destination1 = 'images/productImage/'.$fileName1;
                move_uploaded_file($fileTempName1, $destination1);
                $query = "UPDATE `product` SET productName='$productName',productPrice='$productPrice', productCategory='$productCategory',productImage='$destination1' WHERE productID = $id";
                
                // $query = "UPDATE `coming_soon_movies` SET movieName = '$movieName', movieCategory = '$movieCategory', movieDirector = '$movieDirector', movieWriters = '$movieWriters', movieCast = '$movieCast', movieDuration = '$movieDuration', moviePlot = '$moviePlot', releaseDate = '$movieReleaseDate', trailerUrl = '$movieUrl', movieImage = '$destination1', bannerImage = '$destination2' WHERE movieID = $id";

                $queryRun = mysqli_query($conn, $query);
                if($queryRun){
                    echo "<script>alert('Successfully movie updated')</script>";
                    header("Location: ../php/admin.php");
                }
                else{
                    die(mysqli_error($conn));
                }
            }
        }
    ?>
</body>
</html>