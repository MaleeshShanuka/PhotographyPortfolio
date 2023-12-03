<?php
$con = mysqli_connect('localhost','root','','contact_db');

if (isset($_POST['upload'])) {
   $file = 'images/events/'.$_FILES['image']['name'];

   $query = "INSERT INTO upload(image_name,imgtype) VALUES ('$file','events')";

   $res = mysqli_query($con,$query);

    if ($res) {
      move_uploaded_file($_FILES['image']['tmp_name'], "$file");
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EVENT PHOTOGRAPHY</title>

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

<section class="portfolio">
<h1 class = "text-center">EVENT PHOTOGRAPHY</h3>
   <div class = "container">
      <div class = "col-md-12">
         <div class = "row">
            
               <h3 class = "text-center">Upload Image</h3>
               <form class = "my-5" method = "post" enctype = "multipart/form-data">
                  <input type="file" name="image" class="form-control">
                  <input type="submit" name="upload" value="UPLOAD" class="btn btn-success my-3">
               </form>
         </div>
            <div class = "row align-items-center">
               <h3 class = "text-center">Images</h3>
         </div>
         <div class = "row align-items-center">

               <?php

                  $sql = "SELECT * FROM upload WHERE imgtype='events' ORDER BY id DESC";
                  $res = mysqli_query($con, $sql);
                  
                  if(mysqli_num_rows($res)>0){
                     while ($images = mysqli_fetch_assoc($res)) { ?>

                     <div class="alb">
                        <img src = "<?=$images['image_name']?>" class='my-3' style='width:400px;height:400px;'>
                     </div>

               <?php } }?>
         </div>     
      </div>
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