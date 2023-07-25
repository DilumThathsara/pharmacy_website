<?php
    include './dbh.config.php';
    if(isset($_POST['submit'])){
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productCategory = $_POST['productCategory'];
        //$productImage = $_POST['productImage'];
        

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
            
            $query ="INSERT INTO `product`(`productName`, `productPrice`, `productCategory`, `productImage`) VALUES ('$productName','$productPrice','$productCategory','$destination1')";
            $queryRun = mysqli_query($conn, $query);

            if($queryRun){
                header("Location: ../php/admin.php");
            }
            else{
                die(mysqli_error($conn));
            }
        
    	}
    }
?>