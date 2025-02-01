<header>
    <div class="container">
      <div class="header-left-section">
        <a href="../controllers/index.php"><img src="../images/9055475_bxs_plane_alt_icon.png" alt="icon-plane"></a>
        <a href="../controllers/index.php">Airport</a>
      </div>
      <div class="header-mid-section">
        <a href="../controllers/flights.php">Flights</a>
        <a href="../controllers/parking.php">Parking</a>
        <a href="../controllers/contact.php">Contact Us</a>
        <a href="../controllers/aboutus.php">About Us</a>
        <?php if(isset($_SESSION['user']['role'])) :?>
        <?php if($_SESSION['user']['role']==='Admin') :?>
        <a href="../controllers/dashboard.php">Dashboard</a>
        <?php endif;?>
        <?php endif;?>
      </div>
      <div class="header-right-section">
        <img src="../images/211817_search_strong_icon.png" alt="search icon" class="searchBar" style="cursor: pointer;">
        <input type="text" class="search-bar-header" id="search-div" placeholder="Search...">
        <?php if(isset($_SESSION['user'])) : ?>
          <img src="../images/user_icon.png" alt="user">
          <form action="../controllers/logout.php" method="post">
            <button type="submit" class="log-out">Log out</button>
          </form>
          
        <?php else :?>
          <a href="../controllers/login.php">
              <button class="sign-in">Log in</button>
          </a>
        <?php endif;?>
      </div>
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="nav-bar-mobile">
      <ul>
        <li>
          <a href="../controllers/flights.php" class="active">Flights</a>
        </li>
        <li>
          <a href="../controllers/parking.php">Parking</a>
        </li>
        <li>
          <a href="../controllers/contact.php">Contact Us</a>
        </li>
        <li>
          <a href="../controllers/aboutus.php">About Us</a>
        </li>
        <?php if(isset($_SESSION['user']['role'])) :?>
        <?php if($_SESSION['user']['role']==='Admin'):?>
        <li>
          <a href="../controllers/dashboard.php">Dashboard</a>
        </li>
        <?php endif;?>
        <?php endif;?>
      </ul>
    </div>
</header>