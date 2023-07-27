<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images\about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>We hand pick each flower to ensure the highest quality and freshness. We offer high quality flower at affordable price with timely delivery to provide exceptional customer service.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We offer a veriety of fresh cut flowers.We also provide occuation specific arrangement and customized bouquets.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images\about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images\about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We are a flower website that provides a range of high-quality products and services to meet your floral needs. At our flower website, we understand that flowers have the power to create magic in any occasion, and we want to help you make your occasions even more special. </p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images\pic-1.png" alt="">
            <p>Flowers are always fresh and beautiful. Delivery is timely..</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Danielle C</h3>
        </div>

        <div class="box">
            <img src="images\pic-2.png" alt="">
            <p>I order from here for my aunt every year and she always loves the flowers and the delivery is great..</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Georgie A</h3>
        </div>

        <div class="box">
            <img src="images\pic-3.png" alt="">
            <p>Great service and a very timely delivery. Thank you!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Joseph L</h3>
        </div>

        <div class="box">
            <img src="images\pic-4.png" alt="">
            <p>Brought a beautiful dish garden today and I asked for a purple ribbon and got it. It's a pleasure buying from such a beautiful store and excellent customer service. Look forward to my next visit.A very happy and healthy holidays</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Angela W</h3>
        </div>

        <div class="box">
            <img src="images\pic-5.png" alt="">
            <p>Great service - and appreciated your flexibility when I placed an order with the incorrect date. You went above and beyond!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images\pic-6.png" alt="">
            <p>The service and the product are AMAZING !!! We wouldn’t call anywhere else !!!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mary Lisa</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>