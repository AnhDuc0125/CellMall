<div id="navbar">
    <div class="navbar">
        <div class="navbar__item">
            <a href="home.php" class="logo">CellMall</a>
            <div class="search">
                <input type="text" class="search__input" placeholder="Search">
                <ion-icon name="search-outline" class="search__icon"></ion-icon>
            </div>
            <div class="another">
                <a href="#" class="about">
                <ion-icon name="people-outline" class="symbol"></ion-icon>
                    <div class="content">
                        <p class="item__title">About Us</p>
                        <b class="item__detail">Our team</b>
                    </div>
                </a>
                <a href="#" class="contact">
                    <ion-icon name="call-outline" class="symbol"></ion-icon>
                    <div class="content">
                        <p class="item__title">Contact Us</p>
                        <b class="item__detail">2466.2469</b>
                    </div>
                </a>
                <a href="../pages/cart.php" class="cart">
                    <ion-icon name="bag-handle-outline" class="symbol"></ion-icon>
                    <div class="content">
                        <p class="item__title">Your Cart</p>
                        <b class="item__detail">Check Cart</b>
                    </div>
                </a>
                <a href="login.php" class="member">
                    <ion-icon name="person-outline" class="symbol"></ion-icon>
                    <div class="content">
                        <p class="item__title">Member</p>

                        <?php
                          if(isset($_SESSION['currentUser'])) {
                            echo '<b class="item__detail">'. $_SESSION['currentUser']['username'] .'</b>';
                          } else {
                            echo '<b class="item__detail">Login/Signup</b>';
                          }

                        ?>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>