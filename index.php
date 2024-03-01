<?php
include 'components/connect.php';
session_start();
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};
include 'components/add_cart.php';
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNA-Online Food Order</title>
    <link rel="stylesheet" href="../frontend/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  

    <header>
        <!-- logo  -->
        <div class="logo">
            <a href="index.php"> <img src="img/logo.png" alt="logo" width="170px" height="70px"></a>
        </div>
        

        <!-- nav -->
        <nav>
            <ul class="sidebar">
                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 96 960 960" width="30"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="profile.php"><i class="fa fa-user"></i></a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
            <ul>
              <li class="hideOnMobile"><a href="index.php">Home</a></li>
              <li class="hideOnMobile"><a href="about.php">About</a></li>
              <li class="hideOnMobile"><a href="menu.php">Menu</a></li>
              <li class="hideOnMobile"><a href="orders.php">Orders</a></li>
              <li class="hideOnMobile"><a href="contact.php">Contact</a></li>
              <li class="hideOnMobile"><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
              <li class="hideOnMobile"><a href="profile.php"><i class="fa fa-user"></i></a></li>
            </div>
              <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 96 960 960" width="30"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg></a></li>
            </ul>
          </nav>

          <script>
            function showSidebar(){
              const sidebar = document.querySelector('.sidebar')
              sidebar.style.display = 'flex'
            }
            function hideSidebar(){
              const sidebar = document.querySelector('.sidebar')
              sidebar.style.display = 'none'
            }
          </script>
    </header>

    <section class="homepage">

        <div class="swiper homepage-slider">

            <div class="swiper-wrapper">


                <div class="swiper-slider">
                    <div class="content">
                        <span> Order Your</span>
                        <h3> Delicious Pizza</h3>
                        <span> Now </span>
                        <br>
                        <a href="menu.php" class="btn">See our menu</a>
                    </div>
                    <div class="img_homepage">
                        <img src="img/food/pizza.png" alt="pizza" width="550px" height=" 550px">
                    </div>
                </div>

                
                <div class="swiper-slider">
                    <div class="content">
                        <span> Order Your</span>
                        <h3> Roasted Chicken</h3>
                        <span> Now </span>
                        <br>
                        <a href="menu.php" class="btn">See our menu</a>
                    </div>
                    <div class="img_homepage">
                        <img src="img/food/chicken.png" alt="chicken" width="550px" height=" 550px">
                    </div>
                </div>


                <div class="swiper-slider">
                    <div class="content">
                        <span> Order Your</span>
                        <h3> Cheezy Burger </h3>
                        <span> Now </span>
                        <br>
                        <a href="menu.php" class="btn">See our menu</a>
                    </div>
                    <div class="img_homepage">
                        <img src="img/food/burger.png" alt="burger" width="550px" height=" 550px">
                    </div>
                </div>


            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>





    


    <section class="category">

    <h1 class="title">MENU CATEGORY</h1>
 
    <div class="box-container">
 
       <a href="menu.php" class="box">
          <img src="img/food/cat-1.png" alt="">
          <h2>Fast Food</h2>
       </a>
 
       <a href="menu.php" class="box">
          <img src="img/food/cat-2.png" alt="">
          <h2>Main Dishes</h2>
       </a>
 
       <a href="menu.php" class="box">
          <img src="img/food/cat-3.png" alt="">
          <h2>Drinks</h2>
       </a>
 
       <a href="menu.php" class="box">
          <img src="img/food/cat-4.png" alt="">
          <h2>Desserts</h2>
       </a>
 
    </div>
 
 </section>
 
 <!-- Order process -->

 <!-- <section class="process">

 </section>
  -->
 

   

<!-- -----------------foot top main starts from her------------------------ -->
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
                <br><br>
            </div>
    
            
        </div>
    
    </div>
    
    
    <div class="footer-top-img">
        <img src="img/footer.png" alt="">
    </div>
</div>
<!-- -----------------foot top main ends here------------------------ -->




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
            <li> <a href="index.php" target="_blank">Home</a></li>
            <li> <a href="*" target="_blank">Food Category</a> </li>
            <li> <a href="*" target="_blank">Latest on menu</a> </li>
           
            
        </div>

        <div class="list-2 list">
            <li> <a href="./about.php" target="_blank">About</a></li>
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

            <p class="copyright"> &copy;2024, LUNA-Online Food Ordering | All Right Reserved <span> <a href="#">Subscribe To Newsletter</a> </span> </p>

            <p class="ak">Designed by LUNA-Online food ordering</p>


        </div>

</div>

</footer>
<!-- --------------footer ends here ------------------------------- -->



</body>
</php>