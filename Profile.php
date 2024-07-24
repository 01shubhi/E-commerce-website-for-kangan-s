<?php
session_start();
$_SESSION['userid'];
?>


<?php

$id=$_SESSION['userid'];
if(isset($_POST['update'])) {
    $update_id = $_POST['$id'];
    $update_f_name = $_POST['f_name'];
    $update_l_name = $_POST['l_name'];
    $update_num = $_POST['num'];
    $update_address = $_POST['address'];
    $update_image = $_FILES['update_image']['name'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = 'uploaded_img/'.$update_p_image;

    $update_query = mysqli_query($conn, "UPDATE `users` SET F_name = '$update_f_name',L_name = '$update_l_name', Contant_no = '$update_num ', image = '$update_image' WHERE id = '$update_id'");

    if($update_query) {
        move_uploaded_file($update_image_tmp_name, $update_image_folder);
        $message[] = 'product updated succesfully';
        header('location:profile.php');
    } else {
        $message[] = 'product could not be updated';
        header('location:profile.php');
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" media="screen and (max-width:800px)" href="table.css">
    <link rel="stylesheet" media="screen and (max-width:530px)" href="phone.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
    

</head>
<body>
<?php
if(isset($message)) {
    foreach($message as $message) {
        echo "<script>alert('$message');</script>";
    };
};
?>

<?php include 'Includes/Header.php';?>
 
    <div class="main-content section-p1">
        <?php
        $email= $_SESSION['Email'];
$select_products = mysqli_query($conn, "SELECT * FROM `users` Where Email = '$email'");
if(mysqli_num_rows($select_products) > 0) {
    while($fetch_product = mysqli_fetch_assoc($select_products)) {
        ?>
        <!-- Header -->
        <!-- <div class="profile-Photo-of-user" style="min-height: 600px"> -->
            <!-- <img class="user" src="img/people/1.png" width="350px" alt=""> -->
            <!-- Header container -->
        <!-- </div> -->
        <!-- Page content -->
        <div class="container-fluid mt--7 section-p1">
            <div class="row">
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <center>
                                        <h1 class="mb-0">My account</h1>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-f_name">Your First Name</label>
                                                <input type="text" id="input-f_name" name="f_name"
                                                    class="form-control form-control-alternative" placeholder="f_name"
                                                    value="<?php echo $fetch_product['F_name']?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-f_name">Your Last Name</label>
                                                <input type="text" id="input-f_name" name="l_name"
                                                    class="form-control form-control-alternative"
                                                    placeholder="Last name" value="<?php echo $fetch_product['L_name']?>"readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Email
                                                    address</label>
                                                <input type="email" id="input-email"
                                                    class="form-control form-control-alternative"
                                                    placeholder="abc123@gmail.com" value="<?php echo $fetch_product['Email']?>"readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-first-name">Phone
                                                    Number</label>
                                                <input type="number" id="input-number" name="num"
                                                    class="form-control form-control-alternative"
                                                    placeholder="Phone Number" value="<?php echo $fetch_product['Contant_no']?>"readonly>
                                                <!-- <input type="number" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky"> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                
                                                <label class="form-control-label" for="input-address">
                                                    Address</label>
                                                <input type="address" id="input-address" name="address"
                                                    class="form-control form-control-alternative"
                                                    placeholder="Address" value="<?php echo $fetch_product['Address']?>"readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <div class="text-center">
                                            <!-- <button type="submit" name="update" class="btn btn-success">Make Changes</button> -->
                                            <!-- <button type="submit" name="view-cart"  class="btn btn-success">View Cart</button> -->
                                            <!-- <a href="personal_orders.php" style="background-color:#00ffff; color:white;" class="btn btn-success">View Cart</a> -->
                                            <a href="https://chatbot.page/wgfazT" target="_blank" style="background-color:#00ffff; color:white;" class="btn btn-success">Chat us</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    };
};
?>
    </div>
    <?php include 'Includes/Footer.php';?>
</body>

</html>