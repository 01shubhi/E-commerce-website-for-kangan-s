<?php
@include 'Includes/config.php';
session_start();


if(isset($_POST['submit'])) {

    //     $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = $_POST['password'];
    //     $cpass = md5($_POST['cpassword']);
    $select = " SELECT * FROM admin WHERE Email = '$email' && Password = '$pass' ";

    $result = mysqli_query($conn, $select);


    if(mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);
        $_SESSION['name'] = $row['Name'];
        //         echo $_SESSION['Email'];
        header('location:index.php');



    } else {
        $error[] = 'incorrect email or password!';
    }

};
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login form</title>
        
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/auth.css">
        
    </head>
    <body>
        
        <div class="form-container">
            
            <form action="" method="post">
                <h3>Admin Login</h3>
                <?php
      if(isset($error)) {
          foreach($error as $error) {
              echo '<span class="error-msg">'.$error.'</span>';
          };
      };
?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="Admin login" class="form-btn">
      <p>User Login--<a href="login.php"> login now</a></p>
    </form>
    
</div>

</body>
</html>