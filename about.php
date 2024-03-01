<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About-Online Food Order</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="js/about.js"></script>
</head>
<body>
<!-- header section starts  -->
    <?php include 'header.php'; ?>
<!-- header section ends -->

<section class="about">

    <div class="row">

        <div class="image">
           <img src="img/about .png" alt="">
        </div>
  
        <div class="content">
           <h3>why choose us?</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, neque debitis incidunt qui ipsum sed doloremque a molestiae in veritatis ullam similique sunt aliquam dolores dolore? Quasi atque debitis nobis!</p>
           <a href="menu.php" class="btn">our menu</a>
        </div>
  
     </div>

</section>





<!-- steps section starts  -->

<section class="steps">

    <h2 class="title">simple steps</h2>
 
    <div class="box-container">
 
       <div class="box">
          <img src="img/food/step-1.png" alt="">
          <h3>choose order</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
       </div>
 

       <div class="box">
        <img src="img/food/step-2.png" alt="">
        <h3>Payment</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
     </div>



       <div class="box">
        <img src="img/food/step-3.png" alt="">
        <h3>enjoy food</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
     </div>

       
       
 
    </div>
 
 </section>
 
 <!-- steps section ends -->
 

<!-- details of service hour and payment -->

    <section class="service">

        <h2 class="title"> our service hour</h2>

        <div class="service-hour">
                    <!-- Service Hours -->
                    <ul>
                        <li><strong> Sunday to Friday:</strong> 09:00 AM - 09:00 PM</li>
                        <li><strong>Saturday:</strong> 10:00 AM - 10:00 PM</li>
                    </ul>
                

        </div>

    </section>

    
    <section class="payment">
        
        <h2 class="title"> Payment Options </h2>
        <a href="contact.html">
            <div class="payment-methods">
               <img src="img/visa.png" alt="" width="90px" height="50px">
                <img src="img/paypal.png" alt=""width="90px" height="50px">
                <img src="img/maestro.png" alt=""width="90px" height="50px">
            
            </div>
        </a>


    </section>


<!-- details of service hour and payment ends -->

<!-- FAQs -->

<section class="FAQs">

    <section class="faq">
        <h2 class="title">Frequently Asked Questions</h2>
    
        <div class="faq-list">
            <!-- FAQ List -->


            <div class="faq-item">
                <h3 class="question">1. What is Online Food Ordering System</h3>
                <p class="answer"><span>Answer-> <br></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptate eveniet ut quam eligendi consectetur mollitia. Quidem assumenda error reprehenderit iure, quam vel molestias! Sit dolorum adipisci illo at fugit!</p>
            </div>


            <div class="faq-item">
                <h3 class="question">2. Where are we located?</h3>
                <p class="answer"><span>Answer-> <br></span>Sankhamul,Lalitpur</p>
            </div>



            <div class="faq-item">
                <h3 class="question">3. Do we prepare food ourselves?</h3>
                <p class="answer"><span>Answer-> <br></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi cumque praesentium modi beatae, ad similique ullam, excepturi perferendis exercitationem officiis, maxime amet illum nisi expedita doloribus atque. Ea, architecto. Deleniti!</p>
            </div>
    
            
    
            <div class="faq-item">
                <h3 class="question">4.  What are our services?
                </h3>
                <p class="answer"><span>Answer-> <br></span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit quo repudiandae fuga minus numquam aspernatur ratione id? Voluptates sunt distinctio placeat doloremque nam excepturi officiis harum laboriosam fugit! Iusto, vero!</p>
            </div>

            <div class="faq-item">
                <h3 class="question">5.  Do we guarantee quality of food?</h3>
                <p class="answer"> <span>Answer-> <br></span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam fugiat laboriosam perferendis quas, aut temporibus nesciunt laborum harum accusantium similique dignissimos dolorum iste illo. Saepe reiciendis fuga magnam facere ab? </p>
            </div>


            <div class="faq-item">
                <h3 class="question">6. Can I cancle order?</h3>
                <p class="answer"><span>Answer-> <br></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam fugiat laboriosam perferendis quas, aut temporibus nesciunt laborum harum accusantium similique dignissimos dolorum iste illo. Saepe reiciendis fuga magnam facere ab?</p>
            </div>

            <div class="faq-item">
                <h3 class="question">7. What are our services?</h3>
                <p class="answer"><span>Answer-> <br></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam fugiat laboriosam perferendis quas, aut temporibus nesciunt laborum harum accusantium similique dignissimos dolorum iste illo. Saepe reiciendis fuga magnam facere ab?</p>
            </div>

            <div class="faq-item">
                <h3 class="question">8. How much time does it take to get my food delivery?</h3>
                <p class="answer"><span>Answer-> <br></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam fugiat laboriosam perferendis quas, aut temporibus nesciunt laborum harum accusantium similique dignissimos dolorum iste illo. Saepe reiciendis fuga magnam facere ab?</p>
            </div>

        </div>
    </section>
    


</section>































<!-- --------------footer starts here ------------------------------- -->
<footer class="footer">
    <div class="footer-top-main">
    
    
        <div class="footer-top">
    
            <div class="footer-top-title">
                <h2>We're affiliated and join with:</h2>
            </div>
    
            <div class="footer-top-content">
                <div class="footer-top-1">
                    <div class="footer-top-img">
                        <img src="img/logos/1.png" alt="">
                    </div>
            
                    <p>
                        Registered with company <br> Registration Office <br> Government of Nepal
                    </p>
                </div>
            
                <div class="footer-top-1">
                    <div class="footer-top-img">
                        <img src="img/logos/2.png" alt="">
                    </div>
            
                    <p>
                        Licensed by: <br>
                        National food Council <br>
                        Nepal Food Technology
                    </p>
                </div>
            
                <div class="footer-top-1">
                    <div class="footer-top-img">
                        <img src="img/logos/3.png" alt="">
                    </div>
            
                    <p>
                        Proud Member of NFC <br>  National Food Council
                    </p>
                    <br>
                    <br>
                    <br><br> <br>
                </div>
                
                
            </div>
        
           
        </div>
        
        <div class="footer-top-img">
            <img src="img/footer.png" alt="">
        </div>
        
    </div>

<br>

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
    

    



<footer>
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