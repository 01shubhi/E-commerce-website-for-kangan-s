
<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="index.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
            <link rel="stylesheet" media="screen and (max-width:800px)" href="table.css">
            <link rel="stylesheet" media="screen and (max-width:530px)" href="phone.css">
            <link rel="stylesheet" href="info.css">
            <title>E-Commerce</title>

            <style>
        .user-profile {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }
    </style>

</head>

<body>

<?php include 'Includes/Header.php';?>

            <section id="page-header" class="about-header">

                        <h2>#KnowUs</h2>

                        <p>Read all case studies about our products.</p>

            </section>

            <section id="about-head" class="section-p1">
        <img src="img/about/a66.jpg" width="1000px" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Welcome to our bangle e-commerce website! We are a group of three friends,
                Pradhuman, Manish, and Shubhanjali, who are passionate about providing our
                customers with the most beautiful and unique bangles. Our journey started
                when we realized that there was a lack of availability of quality bangles
                in the market. Therefore, we decided to start our business through a
                user-friendly e-commerce website, where our customers can easily find
                the perfect bangles that suit their style and preferences.

                Our team works tirelessly to bring the latest trends and styles in
                the world of bangles to our customers. We source our bangles from the
                most reliable manufacturers and artisans, ensuring the highest quality
                and authenticity. We take pride in our excellent customer service and
                fast shipping, making your online shopping experience a breeze.</p>
            <abbr title="">At our bangle e-commerce website, we are committed to
                bringing you the best shopping experience possible. Thank you for
                choosing us, and we hope to become your go-to destination for all
                things bangles!</abbr>
            <br>
            <br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Welcome! We're 
                passionate about providing exceptional products and services. With years of 
                experience, we've earned a reputation for quality and innovation. We 
                prioritize customer satisfaction and building strong relationships, exceeding 
                expectations with every interaction. Thank you for choosing us - we look 
                forward to serving you!</marquee>
        </div>
    </section>

    <br><br><br><br><br><br>

    <section class="user-profile">

        <!-- Shubhanjali Patel -->
        <div class="wrapper">
            <div class="card front-face">
                <img src="img/about/Shubhanjali.jpg" alt="Flip Card">
            </div>
            <div class="card back-face">
                <img src="img/about/Shubhanjali.jpg" alt="Flip Card">
                <div class="info">
                    <div class="title">Shubhanjali Patel</div>
                    <p>Front-End Developer and <br>Content Writer</p>
                </div>
                <ul>
                    
                    <a href="https://twitter.com/ShubhanjaliPat6" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/___shubhi_7071___/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/shubhanjali-patel-61007625b/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://github.com/01shubhi" target="_blank"><i class="fa-brands fa-github"></i></a>
                </ul>
            </div>
        </div>




        <!-- Pradhuman Chaudhary -->
        <div class="wrapper">
            <div class="card front-face">
                <img src="img/about/Pradhuman1.JPG" alt="Flip Card">
            </div>
            <div class="card back-face">
                <img src="img/about/Pradhuman.jpg" alt="Flip Card">
                <div class="info">
                    <div class="title">Pradhuman Chaudhary</div>
                    <p>Full-Stack Developer and <br>SQL Developer</p>
                </div>
                <ul>
                    <a href="https://www.facebook.com/profile.php?id=100026106232759" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/Pradhum32141890" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/_pradhuman07/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/pradhumanchaudhary07/"   target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://github.com/Prachaudhary" target="_blank"><i class="fa-brands fa-github"></i></a>
                </ul>
            </div>
        </div>



        <!-- Manish Kumar Jangir -->
        <div class="wrapper">
            <div class="card front-face">
                <img src="img/about/Manish.jpg" alt="Flip Card">
            </div>
            <div class="card back-face">
                <img src="img/about/Manish.jpg" alt="Flip Card">
                <div class="info">
                    <div class="title">Manish Kumar Jangir</div>
                    <p>UX / UI Designer and <br>front-end developer</p>
                </div>
                <ul>

                    <a href="https://twitter.com/manish___jangir" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/manish.jangir_20/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://in.linkedin.com/in/manish-kumar-jangir-933003223?trk=public_profile_browsemap"  target="_blank"><i class="fa-brands fa-linkedin" ></i></a>
                    <a href="https://github.com/ManishJangir1606" target="_blank"><i class="fa-brands fa-github"></i></a>
                </ul>
            </div>
        </div>

    </section>


    <br><br><br><br>

            <section id="feature" class="section-p1">
                        <div class="fe-box">
                                    <img src="img/features/f1.png" alt="">
                                    <h6>Free Shiping</h6>
                        </div>
                        <div class="fe-box">
                                    <img src="img/features/f2.png" alt="">
                                    <h6>Online Order </h6>
                        </div>
                        <div class="fe-box">
                                    <img src="img/features/f3.png" alt="">
                                    <h6>Save Money</h6>
                        </div>
                        <div class="fe-box">
                                    <img src="img/features/f4.png" alt="">
                                    <h6>Promotions</h6>
                        </div>
                        <div class="fe-box">
                                    <img src="img/features/f5.png" alt="">
                                    <h6>Happy Sell</h6>
                        </div>
                        <div class="fe-box">
                                    <img src="img/features/f6.png" alt="">
                                    <h6>Supports</h6>
                        </div>
            </section>

            <section id="page-header" class="about-header">
                 <h2>#Feedback</h2>
                 <p>what Customers thinks about our company</p>
            </section>

            <?php
                    //    @include 'rating.php';
?>

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