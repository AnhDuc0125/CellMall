<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CellMall | About Us</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../assets/css/master.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/aboutPage.css">
</head>

<body>
    <!-- Navbar and Component -->
    <?php
      include_once('../layout/navbar.php');
    ?>

    <div id="main">
        <center>
            <h1>MEET OUR TEAM</h1>
            <span class="logo" style="display: inline-block; width: 500px; height: 50px">--CellMall--</span>
        </center>
        <div class="profile__container">
            <div class="profile">
                <div class="profile__inner">
                    <div class="profile__img">
                        <img src="https://images.unsplash.com/photo-1650832509066-a337a7683fbd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="">
                    </div>
                    <div class="profile__footer">
                        <h2 class="profile__name">Vũ Đức Anh</h2>
                        <p class="profile__locate">Leader</p>
                        <p class="profile_detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsa quod
                            quam ab doloribus sint temporibus tempora.</p>
                        <div class="profile__social">
                            <div class="social__item">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </div>
                            <div class="social__item">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </div>
                            <div class="social__item">
                                <ion-icon name="logo-github"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile">
                <div class="profile__inner">
                    <div class="profile__img">
                        <img src="https://images.unsplash.com/photo-1650773403327-e3e46922c19b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1153&q=80"
                            alt="">
                    </div>
                    <div class="profile__footer">
                        <h2 class="profile__name">Nguyễn Phan Anh</h2>
                        <p class="profile__locate">Developer</p>
                        <p class="profile_detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsa quod
                            quam ab doloribus sint temporibus tempora.</p>
                        <div class="profile__social">
                            <div class="social__item">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </div>
                            <div class="social__item">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </div>
                            <div class="social__item">
                                <ion-icon name="logo-github"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>