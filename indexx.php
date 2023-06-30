<?php

$con = mysqli_connect("localhost","root",);
mysqli_select_db($con, 'store');
$sql = "SELECT * FROM products WHERE featured=1";
$featured = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Fred Store </title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap-reboot.min.js"></script>
	<meta charset="utf-8">
	<meta name="author" content="Fred Rivera">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<a href="index.php" class="btn btn-success btn-sm">Logout</a>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Fred Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-2">
      
      <li class="nav-item active">
        <a class="nav-link" href="indexx.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="product-Dishwashing.php">Dishwashing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="product-Detergent.php">Detergent</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="col-md-2"></div>

   <div class="col-md-8">
     <div class="row">
        <h2 class="text-center">Products</h2> <br> <br>
        <?php
        while($products = mysqli_fetch_assoc($featured)):
          ?>
        <div class="col-md-5">
            <h4> <?= $products['title'];?></h4>
            <img src="<?= $products['image'];?>" alt="<?= $products['title']; ?>"/>
            <p class="lprice">Php <?= $products ['price'];?></p>
            <a href="details.php">
                <button type="button" class="btn btn-success" data-toggle="modal" data-targets="#details-1"> More</button>
            </a>
        </div>
        <?php endwhile; ?>
   </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>