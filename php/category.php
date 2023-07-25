<?php
     include '../php/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category</title>
    <link rel="stylesheet" href="./css/homeStyle.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="../css/categoryStyle.css">
    

</head> 
<body>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="card-section">
  <div class="card-grid">
    <a class="card" href="../php/tabletGrid.php">
      <div class="card__background" style="background-image: url(https://img.freepik.com/free-photo/packings-pills-capsules-medicines_1339-2251.jpg?w=1060&t=st=1688701745~exp=1688702345~hmac=d81854af9eff71b8db80308ad2be32d9f2ab1244dd779fe9c9dcb32d3ab48d5d)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Tablets</h3>
      </div>
    </a>
    <a class="card" href="../php/syrupGrid.php">
      <div class="card__background" style="background-image: url(https://img.freepik.com/free-photo/closeup-shot-different-glass-vials-with-liquids-white-surface-lab_181624-46079.jpg?w=996&t=st=1688701876~exp=1688702476~hmac=3b85dd94cd260dd260884e78252e99d3af4092d89598579eb2453fece078075d)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Syrups</h3>
      </div>
    </a>
    <a class="card" href="../php/creamGrid.php">
      <div class="card__background" style="background-image: url(https://img.freepik.com/free-photo/macadamia-body-lotion-skin-cream_1150-42821.jpg?w=996&t=st=1688702183~exp=1688702783~hmac=f1e4fe7814b2d3d8af999bd890e058cb565f3a4be44594e19babb7f89082d48c)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Cream</h3>
      </div>
    </li>
    <a class="card" href="../php/otherGrid.php">
      <div class="card__background" style="background-image: url(https://img.freepik.com/free-photo/packings-pills-capsules-medicines_1339-2254.jpg?w=740&t=st=1688824985~exp=1688825585~hmac=a6d1d998fd7da55882f061c1c63db7be363058b772b19c2182149fa6028d9e6e)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Other</h3>
      </div>
    </a>
  <div>
</section>
</body>
</html>

<?php
    include './footer.php';
?>