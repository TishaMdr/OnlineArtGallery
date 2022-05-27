<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
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

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/homee.css">

</head>

<body>

    <?php include 'headeer.php'; ?>

    <div class="heading">
        <h3>about us</h3>
        <p> <a href="homee.php">home</a> / about </p>
    </div>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="../img/ez.jpg" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>We bring our diverse background of advertising, design, branding, public relations, research and strategic planning to work for your company. Not only will your materials look great – they will get results.</p>
                <p>Our prices are competitive and fair. There are no surprise bills. Any unexpected or additional expenses must be pre-approved by you. That’s how we would like to be treated, and that is how our clients are treated.</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>

        </div>

    </section>

    <section class="reviews">

        <h1 class="title">Customer reviews</h1>

        <div class="box-container">

            <div class="box">
                <img src="../img/dummy1.jpg" alt="">
                <p>The products are good. I will recommend the products to my friends.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Sophia</h3>
            </div>

            <div class="box">
                <img src="../img/dummy2.jpg" alt="">
                <p>Impressive website with nice features and easy to use. And their service is also very nice.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <h3>James</h3>
            </div>

            <div class="box">
                <img src="../img/dummy3.jpg" alt="">
                <p>Simple website but very useful.Need more such online shopping platform.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
    
                </div>
                <h3>Michael</h3>
            </div>


        </div>

    </section>

    <?php include 'footerr.php'; ?>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>

</body>

</html>