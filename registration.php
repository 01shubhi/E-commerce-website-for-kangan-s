<?php

@include 'Includes/config.php';

if(isset($_POST['submit'])) {

    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];
    if($user_type=="admin") {
        $user_types=1;
    } else {
        $user_types=0;
    }


    $select = " SELECT * FROM users WHERE Email = '$email' && Password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';

    } else {

        if($pass != $cpass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO users (F_name,L_name, Email,Contant_no,Address, Password,isAdmin) VALUES('$f_name','$l_name','$email', '$number',' $address','$pass',' $user_types')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
    }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/auth.css">


</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)) {
          foreach($error as $error) {
              echo '<span class="error-msg">'.$error.'</span>';
          };
      };
?>
      <input type="text" name="f_name" required placeholder="enter your first_name">
      <input type="text" name="l_name" required placeholder="enter your last_name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="text" name="number" required placeholder="enter your Contact_no">
      <input type="text" name="address" required placeholder="enter your Address">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select hidden name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>