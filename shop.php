<?php
session_start();
@include 'Includes/config.php';

if(isset($_POST['add_to_cart'])) {

    // if(!isset($_SESSION['Email'])) {
    //     header('location:login.php');
    // } else {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $email= $_SESSION['Email'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

    if(mysqli_num_rows($select_cart) > 0) {
        $message[] = 'product already added to cart';
    } else {
        $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity,email) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity','$email')");
        $message[] = 'product added to cart succesfully';
    }

}
// }

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

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
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


    <section id="page-header">

        <h2>#StayHome</h2>

        <p>Save more with coupons & up to 70% off</p>

    </section>

    <section id="product1" class="section-p1">

        <div class="pro-container">
    <?php

$select_products = mysqli_query($conn, "SELECT * FROM `products` where features !='upcoming'");
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
      <input type="submit" class="cart" value="add to cart" name="add_to_cart">
    </a>
    </form>
</div>
<?php
    };
};
?>
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
