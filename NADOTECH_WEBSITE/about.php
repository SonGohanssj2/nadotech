<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey There ! I'm El Baghdadi Oualid. A Student of BE in CMC Nador . I love designing websites and exploring new things. Learning new things is my hobby.</p>

         
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/avatar-2048x2048.jpeg" alt="">
         <p>Overall, a positive experience. The website was easy to navigate, and I found what I was looking for without any hassle. The checkout process was smooth, and my package arrived within the estimated timeframe. I would recommend this site to others.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> Fatima Fathi</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/avatar-2048x2048.jpeg" alt="">
         <p>I appreciate the variety of payment options available on this website. It made checkout convenient and secure. The product arrived on time and met my expectations. Will consider shopping here again in the future.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Abdallah Abdi</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/avatar-2048x2048.jpeg" alt="">
         <p>The website has a good selection, but I found the search function to be a bit clunky. It didn't always return relevant results. However, once I found what I was looking for, the ordering process was straightforward.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hassan Shah</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/avatar-2048x2048.jpeg" alt="">
         <p>I received excellent customer service when I had questions about my order. The representative I spoke with was knowledgeable and polite. It's clear that this company values its customers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ahmed Rays</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/avatar-2048x2048.jpeg" alt="">
         <p>Great experience overall! The product exceeded my expectations, and the shipping was fast. The website is user-friendly, and I appreciated the detailed product descriptions. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khalid thami</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/avatar-2048x2048.jpeg" alt="">
         <p>The website layout is clean and intuitive, making it easy to browse. However, I encountered some issues with the sizing chart for clothing items. It would be helpful to have more accurate measurements provided.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Pranil Poudel</a></h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>