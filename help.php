<?php

session_start();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" media="screen and (max-width:800px)" href="table.css">
    <link rel="stylesheet" media="screen and (max-width:530px)" href="phone.css">
    <title>E-Commerce</title>



    <style>
        /* CSS styles go here */
        .container {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-left: 250px;
            margin-right: 250px;
            padding: 30px;
            background: rgb(237, 237, 237);
        }
        .container h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top: 40px;
            color: rgb(0, 0, 0);
        }
        .container ul{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 0px;
            margin: 20px;
        }
        .container p{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .container li{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }


    </style>




</head>

<body>

<?php include 'Includes/Header.php';?>

    <section id="page-header" class="blog-header">

        <h2>#ReadMore</h2>

        <p>Read all Terms & Conditions</p>

    </section>


    <div class="container">
        <h2>Help Center</h2>
        <p>Here you can find answers to common questions and issues related to our e-commerce website.</p>
        <h3>Ordering and Shipping</h3>
        <ul>
            <li><a href="#">How can I track my order?</a></li>
            <li><a href="#">When will my order be shipped?</a></li>
            <li><a href="#">Can I change the shipping address?</a></li>
        </ul>
        <h3>Payment</h3>
        <ul>
            <li><a href="#">What payment methods do you accept?</a></li>
            <li><a href="#">Is my payment information secure?</a></li>
        </ul>
        <h3>Returns and Refunds</h3>
        <ul>
            <li><a href="#">How can I return a product?</a></li>
            <li><a href="#">What is your refund policy?</a></li>
        </ul>
        <h3>Account and Privacy</h3>
        <ul>
            <li><a href="#">How do I create an account?</a></li>
            <li><a href="#">How can I update my account information?</a></li>
            <li><a href="#">What is your privacy policy?</a></li>
        </ul>
    </div>



    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign up</button>
        </div>
    </section>

    <?php include 'Includes/Footer.php';?>

    <script src="index.js"></script>


</body>

</html>
