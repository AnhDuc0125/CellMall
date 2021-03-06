<div id="navbar">
    <div class="navbar">
        <div class="navbar__item">
            <a href="../pages/homePage.php" class="logo">CellMall</a>
            <form class="search" action="searchPage.php" method="get">
                <input type="text" name="key" class="search__input" placeholder="Search">
                <button>
                    <ion-icon name="search-outline" class="search__icon"></ion-icon>
                </button>
            </form>
            <div class="another">
                <a href="../pages/aboutPage.php" class="about">
                    <ion-icon name="people-outline" class="symbol"></ion-icon>
                    <div class="content">
                        <p class="item__title">About Us</p>
                        <b class="item__detail">Our team</b>
                    </div>
                    <span class="underline"></span>
                </a>
                <a href="../pages/contactPage.php" class="contact">
                    <ion-icon name="call-outline" class="symbol"></ion-icon>
                    <div class="content">
                        <p class="item__title">Contact Us</p>
                        <b class="item__detail">2466.2469</b>
                    </div>
                    <span class="underline"></span>
                </a>
                <a href="../pages/cartPage.php" class="cart">
                    <ion-icon name="bag-handle-outline" class="symbol cart"></ion-icon>
                    <div class="content">
                        <p class="item__title">Your Cart</p>
                        <b class="item__detail">Check Cart</b>
                    </div>
                    <span class="underline"></span>
                </a>
                <?php
                    if(isset($_SESSION['currentUser'])) {
                    echo    '<div class="member" style="color: white">
                                <ion-icon name="person-outline" class="symbol"></ion-icon>
                                <div class="content">
                                    <p class="item__title">Member</p>
                                        <b class="item__detail">'. $_SESSION['currentUser']['username'] .'</b>
                                </div>
                                <div class="dropdown">
                                    <a href="loginPage.php?logout=true" class="dropdown__item">Log out</a>
                                    <a href="../admin/login.php" class="dropdown__item">Admin</a>
                                    <a href="resetPage.php" class="dropdown__item">Reset Password</a>
                                </div>
                            </div>';
                    } else {
                    echo    '<a href="../pages/loginPage.php" class="member">
                                <ion-icon name="person-outline" class="symbol"></ion-icon>
                                <div class="content">
                                    <p class="item__title">Member</p>
                                        <b class="item__detail">Login/Signup</b>
                                </div>
                                <span class="underline"></span>
                            </a>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>