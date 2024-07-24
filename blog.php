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
    <title>E-Commerce</title>
</head>

<body>

<?php include 'Includes/Header.php';?>

    <section id="page-header" class="blog-header">

        <h2>#ReadMore</h2>

        <p>Read all case studies about our products.</p>

    </section>

    <section id="blog">
       
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b8.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The History and Significance of Bangles</h4>
                <p>Bangles are an integral part of Indian culture, and their history and significance can be traced back to ancient times. In this blog, we will explore the fascinating history and cultural significance of bangles. From traditional materials to modern designs, we will take a deep dive into the evolution of bangles and the important role they play in Indian fashion and culture.</p>
                <a href="#">Continue Reading</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b9.jpeg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Best material for Bangles</h4>
                <p>"The Best Material for Bangles" is an informative blog post that discusses the different materials used in making bangles. It explores the advantages and disadvantages of each material, including their durability, affordability, and overall aesthetics. The article aims to help readers make an informed decision when choosing the perfect bangle for their outfit and lifestyle. Whether you prefer gold, silver, plastic, or other materials, this blog post has got you covered.</p>
                <a href="#">Continue Reading</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">

            <div class="blog-img">
                <img src="img/blog/b11.png" alt="">
            </div>
            <div class="blog-details">
                <h4>10 Unique Bangles That Will Complete Your Outfit</h4>
                <p>Are you tired of wearing the same old bangles every day? Spice up your accessory collection with these 10 unique bangles that will complete any outfit! From bold statement pieces to delicate designs, these bangles are sure to turn heads and add a touch of personality to your look. Whether you're dressing up for a special occasion or just want to add some flair to your everyday wardrobe, these bangles are a must-have. Read on to discover which ones you need to add to your collection today!


            </p>
                <a href="#">Continue Reading</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b2.png" alt="">
            </div>
            <div class="blog-details">
                <h4>The Significance of Bangle-wearing in Indian Culture</h4>
                <p>Bangles have been an integral part of Indian culture for centuries, 
                    and hold great significance in various rituals and traditions. They 
                    are believed to bring good luck and protect from evil. The sound of 
                    bangles is considered auspicious and symbolizes the presence of feminine 
                    energy!</p>
                <a href="#">Continue Reading</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b12.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The History and Significance of Bangle Bracelets</h4>
                <p>Bangle bracelets have a rich history and cultural significance. 
                    In this blog post, we delve into the origins and symbolism of 
                    bangle bracelets, exploring their use in different cultures and 
                    religions!</p>
                <a href="#">Continue Reading</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b4.jpeg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Perfect Accessory: How to Style Your Bangle Bracelet</h4>
                <p>Bangle bracelets are a versatile and stylish accessory that can 
                    add the perfect finishing touch to any outfit. In this blog post, 
                    we share tips and tricks on how to style your bangle bracelet to 
                    create different looks for different occasions.</p>
                <a href="#">Continue Reading</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b6.jpeg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Benefits of Wearing Bangle Bracelets: More Than Just Style</h4>
                <p>LDid you know that wearing bangle bracelets can have physical and mental 
                    health benefits? In this blog post, we explore the science behind the 
                    benefits of wearing bangle bracelets, from improving circulation to 
                    reducing stress and anxiety!</p>
                <a href="#">Continue Reading</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b11.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Rajasthani Bangles: A Fusion of Tradition and Style</h4>
                <p>Rajasthan is known for its rich culture and heritage, and bangles play an 
                    important role in it. Rajasthani bangles are not just a piece of jewelry 
                    but a symbol of tradition and pride. These bangles are available in various 
                    designs, materials, and colors, and are popular among women of all ages!</p>
                <a href="#">Continue Reading</a>
            </div>
            <h1>13/01</h1>
        </div>
    </section>


    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
    </section>

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
