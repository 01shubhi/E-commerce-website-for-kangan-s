<?php
@include 'Includes/config.php';

session_start();
?>

<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $desc = $_POST['message'];
    // $create_datetime = date("Y-m-d H:i:s");

    $insert_query = mysqli_query($conn, "INSERT INTO `enquiry`(Name,Email,Subject,Message) VALUES('$name', '$email', '$subject','$desc')") or die('query failed');

    if($insert_query) {
        $message[] = 'Enquiry Submitted';
    } else {
        $message[] = 'could not Enquiry Submitted';
    }
};
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
    <script>(function(w, d) { w.CollectId = "6458b5b52f45336a32168470"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
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

    <section id="page-header" class="contact-header">

        <h2>#let's_talk</h2>

        <p>Read all case studies about our products.</p>

    </section>
    
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span class="c_red">Get In Touch</span>
            <h2>Get in touch with us for any questions or inquiries.</h2>
            <h3>Head office</h3>
            <div>
                <li>
                    <i class="fa-solid fa-map-location"></i>
                    <p>Indira Gandhi National Tribal University</p>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <p>project@igntu.ac.in</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone-flip"></i>
                    <p>1234567809</p>
                </li>
                <li>
                    <i class="fa-solid fa-clock"></i>
                    <p>Monday-Saturday 9:00Am to 5:00Pm</p>
                </li>
            </div>
        </div>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5857.075282792922!2d81.74756722807565!3d22.806364732150257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3987be1bc56d8d87%3A0x975430083e6ff77a!2sIndira%20Gandhi%20National%20Tribal%20University!5e1!3m2!1sen!2sin!4v1683391508518!5m2!1sen!2sin" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>
    </section>

    <section id="form-details">
        <form action="" method="post" class="form">
            <span>Leave a Message</span>
            <h2>We love to hear from you</h2>
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="text" name="email" placeholder="E-mail" name="" id="" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" id="" cols="30" rows="10" placeholder="YourMessage" required></textarea>
            <button class="normal" name="submit">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="img/people/shubhi.png" alt="">
                <p><span>Shubhanjali Patel</span> Content Writer <br> Phone: 9301707198
                    <br> Email:shubhi123@gmail.com
                </p>
            </div>
            <div>
                <img src="img/people/manish.png" alt="">
                <p><span>Manish Kumar Jangir</span> UX/UI and Front-End Developer <br> Phone: 7688826365
                    <br> Email:manishjangir1606@gmail.com
                </p>
            </div>
            <div>
                <img src="img/people/pradhuman.png" alt="">
                <p><span>Pradhuman Chaudhary</span> Full-Stack Developer <br> Phone: 7091298322
                    <br> Email:pradhuman123@gmail.com
                </p>
            </div>
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
