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
                <tr>
                    <td><a href="#"><i class="fa-solid fa-circle-xmark"></i></a>
                    </td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Lorem ipsum dolor sit amet consectetur, </td>
                    <td>$118.8</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.8</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-solid fa-circle-xmark"></i></a>
                    </td>
                    <td><img src="img/products/f2.jpg" alt=""></td>
                    <td>Lorem ipsum dolor sit amet consectetur, </td>
                    <td>$118.8</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.8</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-solid fa-circle-xmark"></i></a>
                    </td>
                    <td><img src="img/products/f3.jpg" alt=""></td>
                    <td>Lorem ipsum dolor sit amet consectetur, </td>
                    <td>$118.8</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.8</td>
                </tr>
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
                    <td>$118.8</td>
                </tr>
                <tr>
                    <td>shippingt</td>
                    <td>free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$118.8</strong></td>
                </tr>
            </table>
            <button class="normal">Procced to check out</button>
        </div>
    </section>

    <?php include 'Includes/Footer.php';?>

    <script src="index.js"></script>
</body>

</html>
