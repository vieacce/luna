<header>
    <link rel="stylesheet" href="css/style.css">
    <!-- logo  -->
    <div class="logo">

        <a href="index.php"> <img src="img/logo.png" alt="logo" width="170px" height="70px"></a>

    </div>

    <nav>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="profile.php"><i class="fa fa-user"></i></a></li>
            <li><a href="search.php"><i class="fa fa-search"></i></a></li>
            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>
        <ul>
          <li class="hideOnMobile"><a href="index.php">Home</a></li>
          <li class="hideOnMobile"><a href="about.php">About</a></li>
          <li class="hideOnMobile"><a href="menu.php">Menu</a></li>
          <li class="hideOnMobile"><a href="orders.php">Orders</a></li>
          <li class="hideOnMobile"><a href="contact.php">Contact</a></li>
          <li class="hideOnMobile"><a href="search.php"><i class="fa fa-search"></i></a></li>
          <li class="hideOnMobile"><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
          <li class="hideOnMobile"><a href="profile.php"><i class="fa fa-user"></i></a></li>
        </div>
          <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg></a></li>
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