<?php
@include 'Includes/config.php';
session_start();

if(isset($_POST['add_to_cart'])) {


    if(!isset($_SESSION['Email'])) {
        header('location:login.php');
    } else {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $email="suraj@gmail.com";
        $product_quantity = 1;

        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

        if(mysqli_num_rows($select_cart) > 0) {
            $message[] = 'product already added to cart';
        } else {
            $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity,email) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity','$email')");
            $message[] = 'product added to cart succesfully';
        }
    }

}

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
    <!-- <script>(function(w, d) { w.CollectId = "6458afe82f45336a32168468"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script> -->
    <script src="index.js"></script>
    <title>E-Commerce</title>
</head>

<body>

    
    <?php
if(isset($message)) {
    foreach($message as $message) {
        // echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        echo "<script>alert('$message');</script>";
    };
};
?>
<?php include 'Includes/Header.php';?>

<section id="hero">
        <h4>Super value deals</h4>
        <h2>Get your hands on the </h2>
        <h1>latest bangle designs</h1>
        <p>Save more with coupons & up to 20% off</p>
        <button><a href="shop.php" style="text-decoration:none; color:black;">Shop now</a></button>
    </section>

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

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Make a statement with our New Morden Design</p>
        <div class="pro-container">
        <?php

$select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE features='TOP' ");
if(mysqli_num_rows($select_products) > 0) {
    while($fetch_product = mysqli_fetch_assoc($select_products)) {
        ?>
            <div class="pro">
                <form action="" method="post">
                    <a href="singleproduct.php?product_id=<?php echo $fetch_product['product_id'] ?>">
                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" style="height:300px; weight:100%;"  alt="">
                <div class="des">
                    <span><?php echo $fetch_product['name']; ?></span>
                    <h5>Gold Plated Traditional Bangles</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>&#x20B9;<?php echo $fetch_product['price']; ?>/-</h4>
                </div>
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                 <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                 <input type="submit" class="cart" value="Cart" name="add_to_cart">
                </a>
                </form>
            </div>
<?php
    };
};
?>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Shop Now and Get <span>20% Off </span> on Our Trendy Bangles Collection!</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
        <p>Be the first to add the latest styles to your collection - Shop our new arrivals now!</p>
        <div class="pro-container">
        <?php

            $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE features='Upcoming' ");
if(mysqli_num_rows($select_products) > 0) {
    while($fetch_product = mysqli_fetch_assoc($select_products)) {
        ?>
            <div class="pro">
                <form action="" method="post">
                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" style="height:300px; weight:100%;"  alt="">
                <div class="des">
                    <span><?php echo $fetch_product['name']; ?></span>
                    <h5>Gold Plated Traditional Bangles</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>&#x20B9;<?php echo $fetch_product['price']; ?>/-</h4>
                </div>
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
      <input type="submit" class="cart" value="add to cart" name="">
    </form>
</div>
<?php
    };
};
?>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals</h4>
            <h2>buy 2 get 1 free</h2>
            <span>Add some grace to your wrist with our stunning Kangan collection, now on sale!</span>
            <button class="white">Learn more</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Events</h4>
            <h2>Upcomming Exibitions</h2>
            <span>Step into a world of elegance and explore the timeless beauty of kangan <br>
                 at our exclusive exhibition.</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">

            <h2>Seasonal Sale</h2>
            <h3>Winter Colection -50% Off</h3>

        </div>
        <div class="banner-box banner-box2">

            <h2>Bangle Bazzar</h2>
            <h3>In your City 2022</h3>

        </div>
        <div class="banner-box banner-box3">

            <h2>New Designs</h2>
            <h3>New Trendy Designs for you!</h3>

        </div>
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







