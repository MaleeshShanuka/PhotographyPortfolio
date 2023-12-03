<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/themeimages/tiger01.jpg" alt="">
            <div class="content">
               <h3>LANDSCAPE AND WILDLIFE PHOTOGRAPHY</h3>
               <p>Immerse yourself in the untamed beauty of Scotland with our captivating landscape and wildlife photography.</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/themeimages/jennyportrait.jpg" alt="">
            <div class="content">
               <h3>PORTRAIT PHOTOGRAPHY</h3>
               <p>Capture your essence with our personalized portrait sessions.</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/themeimages/weddingthai.jpg" alt="">
            <div class="content">
               <h3>EVENT PHOTOGRAPHY</h3>
               <p>Document your special occasions with finesse and artistry.</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/themeimages/party01.jpg" alt="">
            <div class="content">
               <h3>CUSTOM PACKAGES</h3>
               <p>If you have specific photography needs that are not covered in the above categories, we offer custom packages tailored to your requirements. Contact us to discuss your unique vision, and we'll create a package that suits your needs and budget.</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>>

      </div>

      <div class="swiper-pagination"></div>

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