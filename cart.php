<?php

session_start();
?>

<?php
@include 'Includes/config.php';

if(isset($_POST['update_update_btn'])) {
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
    if($update_quantity_query) {
        header('location:cart.php');
    };
};

if(isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
    header('location:cart.php');
};

if(isset($_GET['delete_all'])) {
    mysqli_query($conn, "DELETE FROM `cart`");
    header('location:cart.php');
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

       <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="index.css">

    <title>E-Commerce</title>
</head>

<body>

<?php include 'Includes/Header.php';?>


    <section id="page-header" class="cart-header">

        <h2>#let's_talk</h2>

        <p>Read all case studies about our products.</p>

    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Prices</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
            <?php

         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
$grand_total = 0;
if(mysqli_num_rows($select_cart) > 0) {
    while($fetch_cart = mysqli_fetch_assoc($select_cart)) {
        ?>
                <tr>
                    <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')"> <i class="fa-solid fa-circle-xmark"></i></a></td>

                    <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" weight="100%" alt=""></td>
                    <td><?php echo $fetch_cart['name']; ?></td>
                    <td>&#x20B9;<?php echo $fetch_cart['price']; ?>/-</td>
                    <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>&#x20B9;<?php echo $sub_total = $fetch_cart['price'] * $fetch_cart['quantity']; ?>/-</td>
                </tr>
                <?php
           $grand_total += $sub_total;
    };
};
?>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply coupon</h3>
            <div>
                <input type="text" placeholder="Enter your coupon">
                <button class="normal">Apply</button>
            </div>

        </div>
        <div id="subtotal">
            <h3>Cart totals</h3>
            <table>
                <tr>
                    <td>cart subtoyal</td>
                    <td>&#x20B9;<?php echo $grand_total; ?>/-</td>
                </tr>
                <tr>
                    <td>shippingt</td>
                    <td>free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>&#x20B9;<?php echo $grand_total; ?>/-</strong></td>
                </tr>
            </table>
            <a href="checkout.php" class="btn <?= ($grand_total > 1) ? '' : 'disabled'; ?>">procced to checkout</a>
        </div>
    </section>

    <?php include 'Includes/Footer.php';?>

    <script src="index.js"></script>
</body>

</html>
