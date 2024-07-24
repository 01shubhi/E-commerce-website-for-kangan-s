<?php
@include 'Includes/config.php';

if(!isset($_SESSION)) {
    session_start();
}

$id=$_GET['product_id'];
if(filter_var($id, FILTER_VALIDATE_INT)===false) {
    die("No valid Id");
}

$id=$_GET['product_id'];
$qry=mysqli_query($conn, "SELECT * from product_size_variation Where product_id='$id'");
$numberOfRow=mysqli_num_rows($qry);
if($numberOfRow>0) {
    while($row1=mysqli_fetch_array($qry)) {
        // $pID=$row1["product_id"];
        $sID=$row1["size_id"];
    }
}



if(!isset($_SESSION['Email'])) {
    header('location:login.php');
} else {
    if(isset($_POST['add_to_cart'])) {

        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $email=$_SESSION['Email'];
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

if($_SESSION['Email']) {
    if(isset($_POST['submit'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $email=$_SESSION['Email'];
        $product_quantity =$_POST['quantity'];
        $size=$_POST['size'];

        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

        if(mysqli_num_rows($select_cart) > 0) {
            $message[] = 'product already added to cart';
        } else {
            $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity,email,size) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity','$email','$size')");
            $message[] = 'product added to cart succesfully';
        }
    }

} else {
    header('location:login.php');
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

    <section id="prodetails" class="section-p1">

    <?php

$select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE product_id=$id");
if(mysqli_num_rows($select_products) > 0) {
    while($fetch_product = mysqli_fetch_assoc($select_products)) {
        ?>

<div class="single-pro-img">
                    <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" width="100%" id="mainimg" alt="">
                    <div class="small-img-group">
                        <div class="small-img-icon">
                            <img src="img/products/p1.png" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-icon">
                            <img src="img/products/p16.png" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-icon">
                            <img src="img/products/p17.png" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-icon">
                            <img src="img/products/p12.png" width="100%" class="small-img" alt="">
                        </div>
                    </div>
                </div>
<!-- 
        <div class="single-pro-img">
        <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" width="100%" id="mainimg"  alt="">
            <div class="small-img-group">
            </div>
        </div> -->

        <div class="single-pro-details">
            <h6>Home / Bangles</h6>
            <h4><?php echo $fetch_product['name']; ?></h4>
            <h2>&#x20B9;<?php echo $fetch_product['price']; ?>/-</h2>
            <form action=""  method="post">

            <select name="size">
            <?php

$sql="SELECT * from sizes";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0) {
            while($row = $result-> fetch_assoc()) {
                echo"<option selected value='".$row['size_name']."'>".$row['size_name'] ."</option>";
            }
        }
        ?>
   <?php

        // $sql="SELECT * from sizes";
        // $result = $conn-> query($sql);

        // if ($result-> num_rows > 0) {
        //     while($row = $result-> fetch_assoc()) {
        //         echo"<option value='".$row['size_id']."'>".$row['size_name'] ."</option>";
        //     }
        // }
        ?>
                </select>
               
                <input type="number" name="quantity" min="1" max="10" value="1">
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                 <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                <button class="normal" type="submit" name="submit">Add to Cart</button>
            </form>
            <h4>Products Details:-</h4>
           <span>
            <table>
                            <tr>
                                <td>Model Name</td>
                                <td> - </td>
                                <td><?php echo $fetch_product['model_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Model Number</td>
                                <td> - </td>
                                <td><?php echo $fetch_product['model_num']; ?></td>
                            </tr>
                            <tr>
                                <td>Ideal For</td>
                                <td> - </td>
                                <td>Women, Girls</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td> - </td>
                                <td>Bangle Set</td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td> - </td>
                                <td>Gold</td>
                            </tr>
                            <tr>
                                <td>Base Material</td>
                                <td> - </td>
                                <td>Alloy</td>
                            </tr>
                            <tr>
                                <td>Occasion<br></td>
                                <td> - </td>
                                <td>Wedding & Engagement</td>
                            </tr>
                        </table>
                        </span>
                        <h4>Description:-</h4>
                        <span><?php echo $fetch_product['Decription']; ?></span>
        
                    </div>


        <?php
    };
};
?>
    </section>

    <?php
                    //    @include 'rating.php';
?>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer collections New Morden Design</p>
        <div class="pro-container">
        <?php

$select_products = mysqli_query($conn, "SELECT * FROM `products` Limit 4");
if(mysqli_num_rows($select_products) > 0) {
    while($fetch_product = mysqli_fetch_assoc($select_products)) {
        ?>
            <div class="pro">
                <a href="singleproduct.php?product_id=<?php echo $fetch_product['product_id'] ?>"/>
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
                    <h4>$<?php echo $fetch_product['price']; ?>/-</h4>
                </div>
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
      <input type="submit" class="cart" value="add to cart" name="add_to_cart">
    </form>
</div>
<?php
    };
};
?>
        </div>
    </section>  <script>
        var mainimg = document.getElementById("mainimg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            mainimg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            mainimg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            mainimg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            mainimg.src = smallimg[3].src;
        }
    </script>
    <?php include 'Includes/Footer.php';?>
</body>

</html>
