<?php
include 'components/connect.php';
session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact LUNA-Online Food Order</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
  <!-- header section starts  -->
<?php include 'header.php'; ?>
<!-- header section ends -->


    <section class="enquiry">
        <div class="container">
            <div class="content">
              <div class="left-side">
                <div class="address details">
                  <i class="fas fa-map-marker-alt"></i>
                  <div class="topic">Address</div>
                  <div class="text-one">Patan, Lalitpur</div>
                  <div class="text-two">Indrachowk, Kathmandu</div>
                </div>
                <div class="phone details">
                  <i class="fas fa-phone-alt"></i>
                  <div class="topic">Phone</div>
                  <div class="text-one">+977 9800000000</div>
                  <div class="text-two">+977 9800000000</div>
                </div>
                <div class="email details">
                  <i class="fas fa-envelope"></i>
                  <div class="topic">Email</div>
                  <div class="text-one">luna@gmail.com</div>
                  <div class="text-two">info.LUNA@gmail.com</div>
                </div>
              </div>
              <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p>If you have any types of quries , you can send us message from here. It's our pleasure to help you.</p>
              <form action="#">
                <div class="input-box">
                  <input type="text" placeholder="Enter your name">
                </div>
                <div class="input-box">
                  <input type="text" placeholder="Enter your email">
                </div>
                <div class="input-box message-box">
                  <textarea id="subject" name="subject" placeholder="Write something.." ></textarea>
                </div>
                <div class="button">
                  <input type="button" value="Submit" >
                </div>
              </form>
            </div>
            </div>
          </div>
        </section>

<!-- map starts here -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8204463439375!2d85.31869601446492!3d27.674849282802203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18bde25f3f45%3A0xa2a31d6a84a04d6f!2sSankhamul%2C%20Lalitpur%2044600!5e0!3m2!1sen!2snp!4v1648041983002!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


    <!-- More of your website content -->
</div>
<!-- map ends here -->



  
<div class="footer-top-img">
    <img src="img/footer.png" alt="">
</div>
<!-- --------------footer starts here ------------------------------- -->
<div class="footer">

    <div class="contact-info">

        <div class="contact-info-number">
        
            <div class="contact-info-img1">
                <img src="img/callus-icon.svg" alt="">
            </div>
       
            <div class="contact-info-num">
                <p>Call us</p>
                <p> +977 9800000000</p>
            </div>

        </div>

        <div class="contact-info-email">
        
            <div class="contact-info-img2">
                <img src="img/mail-icon.svg" alt="">
            </div>
       
            <div class="contact-info-mail">
                <p>Email us </p>
                <p>ofoodo@gmail.com</p>
            </div>

        </div>

        <div class="contact-info-social">
        
            <div class="contact-info-img3">
                <img src="img/follow-icon.svg" alt="">
            </div>
       
            <div class="contact-info-soc">
                <p>Follow us</p>
                <img src="img/facebook-icon.svg" alt="">
                <img src="img/twitter-icon.svg" alt="">
                <img src="img/linkedin-icon.svg" alt="">
                <img src="img/instagram-icon.svg" alt="">
            </div>

        </div>

    </div>

    <hr>

    <div class="footer-links">

        <div class="list-1 list">
            <li> <a href="index.html" target="_blank">Home</a></li>
            <li> <a href="*" target="_blank">Food Category</a> </li>
            <li> <a href="*" target="_blank">Latest on menu</a> </li>
           
            
        </div>

        <div class="list-2 list">
            <li> <a href="./about.html" target="_blank">About</a></li>
            <li> <a href="#" target="_blank">Our Menu</a> </li>
            <li> <a href="#" target="_blank">Profile</a> </li>
            
        </div>

        <div class="list-3 list">
            <li> <a href="#">Fast Food</a> </li>
            <li> <a href="#">Main Dishes</a> </li>
            <li> <a href="#">Drinks</a> </li>
            
           
        </div>

        <div class="list-4 list">
            <li> <a href="#" target="_blank">Desserts</a> </li>
            <li> <a href="#" target="_blank"> Contact</a> </li>
            <li><a href="#">FAQs</a></li>
            
           
        </div>


    </div>

</div>


<div class="footer-last-section">

        <div class="footer-last-1">

                <p class="secure">Secure Payment</p>
        
                 <div class="secure-img">
                     <img src="img/visa.png" alt="">
                     <img src="img/paypal.png" alt="">
                     <img src="img/maestro.png" alt="">
                </div>

        </div>


        <div class="footer-last-2">

            <p class="copyright"> &copy;2022, LUNA-Online Food Ordering | All Right Reserved <span> <a href="#">Subscribe To Newsletter</a> </span> </p>

            <p class="ak">Designed by LUNA-Online food ordering</p>


        </div>

</div>

</footer>
<!-- --------------footer ends here ------------------------------- -->



</body>
</html>