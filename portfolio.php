<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="pricing">
      <div class="box-container">
         <div class="box">
            <h3>Landscape and Wildlife Photography</h3>
            <a href="landscapeandwildlifepotos.php" class="btn">See more</a>
         </div>
         <div class="box">
            <h3>Portrait Photography</h3>
            <a href="portraitphotos.php" class="btn">See more</a>
         </div>
         <div class="box">
            <h3>Event Photography</h3>
            <a href="eventphotos.php" class="btn">See more</a>
         </div>
      </div>
</section>
<?php @include 'footer.php'; ?>

</div>















<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

   lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>

</body>
</html>