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
            <img src="images/banner-2.jpg" alt="">
        </div>

        <div class="content">
            <h3>why are we?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/banner.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/banner-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

        <div class="icons-container">

        <div class="icons">
            <img src="images/icon-1.png" alt="">
            <h3>fits universal</h3>
        </div>

        <div class="icons">
            <img src="images/icon-2.png" alt="">
            <h3>free delivery</h3>
        </div>

        <div class="icons">
            <img src="images/icon-3.png" alt="">
            <h3>easy returns</h3>
        </div>

        <div class="icons">
            <img src="images/icon-4.png" alt="">
            <h3>easy payments</h3>
        </div>


    </div>

</section>


<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>“SPECS. has set a new standard for eye care products. Exquisite frames, finely cut lens & flawless finish. PERFECTLY EXECUTED PRODUCT!”</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John</h3>
        </div>

        <div class="box">
            <img src="images/abc6.jpg" alt="">
            <p>"This is my third pair of spectacles from here and can definitely regard SPECS. as the epitome of quality & SERVICE."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nandita</h3>
        </div>

        <div class="box">
            <img src="images/blog-4.jpg" alt="">
            <p>“Wide range of options, easy to order, fast shipping & great quality! Will definitely order from SPECS. again.”</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Selina</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>"SPEEDY DELIVERY! Just received my pair & delighted to see the QUALITY of spectacles for such an affordable price."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Manali</h3>
        </div>

        <div class="box">
            <img src="images/abc5.jpg" alt="">
            <p>“Wide range of options, easy to order, fast shipping & great quality! Will definitely order from SPECS. again.”</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Bablu</h3>
        </div>

        <div class="box">
            <img src="images/abc4.jpeg" alt="">
            <p>"This is my third pair of spectacles from here and can definitely regard SPECS. as the epitome of quality & SERVICE."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Gopal Das</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>