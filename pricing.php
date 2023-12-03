<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>pricing</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="pricing">

   <h1 class="heading">Malcolm Lismore Photography - Prices</h1>

   <div class="box-container">

      <div class="box">
         <h3>Landscape and Wildlife Photography</h3>
         <div class="price">Prints: Starting from $50</div>
         <div class="price">Canvas Prints: Starting from $100</div>
         <div class="price">Framed Prints: Starting from $150</div>
         <div class="price">High-Resolution Digital Downloads: Starting from $30</div>
         <a href="contact.php" class="btn">contact</a>
      </div>

      <div class="box">
         <h3>Portrait Photography</h3>
         <div class="price">Individual Portraits: Starting from $150</div>
         <div class="price">Family Portraits: Starting from $250</div>
         <div class="price">Couples & Engagement Sessions: Starting from $200</div>
         <div class="price">Maternity & Newborn Sessions: Starting from $180</div>
         <a href="contact.php" class="btn">contact</a>
      </div>

      <div class="box">
         <h3>Event Photography</h3>
         <div class="price">Weddings & Elopements: Packages available, starting from $1200</div>
         <div class="price">Corporate Events: Please contact us for a custom quote</div>
         <div class="price">Parties & Celebrations: Starting from $300</div>
         <a href="contact.php" class="btn">contact</a>
      </div>

      <div class="box">
         <h3>Custom Packages</h3>
         <div class="price">If you have specific photography needs that are not covered in the above categories, we offer custom packages tailored to your requirements. Contact us to discuss your unique vision, and we'll create a package that suits your needs and budget.</div>
         <a href="contact.php" class="btn">contact</a>
      </div>

   </div>

</section>


<?php @include 'footer.php'; ?>

</div>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>