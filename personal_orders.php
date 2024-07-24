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

    <section class="section-p1">
         <center>
                       <h1>Your All Orders</h1>
                       </center>
            
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <!-- <td>Image</td> -->
                    <td>Product</td>
                    <td>Prices</td>
                    <td>Address</td>
                    <td>Payment</td>
                    <td>Order Date</td>

                </tr>
            </thead>
            <tbody>
            <?php
 $email= $_SESSION['Email'];
$select_cart = mysqli_query($conn, "SELECT * FROM `orders`  Where Email = '$email'");
$grand_total = 0;
if(mysqli_num_rows($select_cart) > 0) {
    while($fetch_cart = mysqli_fetch_assoc($select_cart)) {
        ?>
                <tr>
                    <!-- <td><img src="img/products/f1.jpg" alt=""></td> -->
                    <td><?php echo $fetch_cart['total_products']?> </td>
                    <td><?php echo $fetch_cart['total_price']?> </td>
                    <td><?php echo $fetch_cart['city']?> </td>
                    <td><?php echo $fetch_cart['pay_method']?> </td>
                    <td><?php echo $fetch_cart['order_date']?> </td>
                </tr>
                <?php

    };
};
?>
            </tbody>
        </table>

    </section>

   
    <?php include 'Includes/Footer.php';?>

    <script src="index.js"></script>
</body>

</html>
