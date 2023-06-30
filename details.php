<?php

$con = mysqli_connect("localhost","root",);
mysqli_select_db($con, 'store');
$sql = "SELECT * FROM products WHERE featured=1";
$featured = $con->query($sql);

?>
<div class="col-md-2"></div>

<div class="col-md-8">
  <div class="row">
     <h2 class="text-center">Product Details:</h2> <br> </br>
     <?php
     while($products = mysqli_fetch_assoc($featured)):
       ?>
     <div class="col-md-5">
         <h4> <?= $products['title'];?></h4>
         <img src="<?= $products['image'];?>" alt="<?= $products['title']; ?>"/>
         <p class="lprice">Php <?= $products ['price'];?></p>
         <p class="desc"><?= $products ['description'];?></p>
         <p class="bname"><?= $products ['brandname'];?></p>
     </div>
     <?php endwhile; ?>
</div>
</div>