<?php
  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

  $selectFeedbackSQL = "SELECT * FROM feedback ORDER BY date DESC LIMIT 9";
  $feedbackList = executeResult($selectFeedbackSQL);
?>
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
    <link rel="stylesheet" href="../assets/css/layouts/navbar.css" />
    <link rel="stylesheet" href="../assets/css/layouts/footer.css" />
    <link rel="stylesheet" href="../assets/css/pages/aboutPage.css">
</head>

<body>
    <!-- Navbar and Component -->
    <?php
      include_once('../layout/navbar.php');
    ?>

    <div id="main">
        <center style="user-select: none; margin-bottom: 25px">
            <span class="logo" style="display: inline-block; width: 500px; height: 50px">About CellMall</span>
        </center>
        <div class="about__box general">
            <div class="about__img">
                <img src="../assets/photos/store.png" alt="">
            </div>
            <div class="about__content">
                <h1>General infomation</h1>
                <table class="about__table">
                    <h4>
                        CellMall is a genuine authorized retail system of Apple Vietnam!</h4>
                    <tr>
                        <td>
                            <ul class="about__list">
                                <li>Enthusiastic, friendly staff, free parking & Wifi</li>
                                <li>Experience it firsthand, and try the product for free</li>
                                <li>Selling price, promotion is always the best in the market</li>
                                <li>Business sales service: best price - with commission</li>
                                <li>Genuine warranty, 1 month free replacement</li>
                            </ul>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="about__box target">
            <div class="about__content">
                <h1>Target</h1>
                <p class="indent">
                    CellMall always operates on the principle of putting the customer as the center, every effort to
                    achieve the highest goal is to satisfy users through the products provided and customer service.
                    Hoang
                    Ha Mobile is gradually building outstanding customer service, worthy of being the leading retailer
                    in
                    Vietnam. The trust and enthusiastic support of customers at the branch chain has partly confirmed
                    the
                    operational efficiency of CellMall's staff.
                </p>
                <p class="indent">
                    For our customers, we always put the heart as the root, working with a serious, honest and
                    responsible
                    spirit, to bring the best service experience.
                </p>
                <p class="indent">
                    For colleagues, we promote a culture of learning, solidarity and mutual assistance to create a
                    respectful - fair - civilized working environment for employees in the company.
                </p>
                <p class="indent">
                    For partners, CellMall always works on the principle of respect, creating value for the community
                    and developing together sustainably.
                </p>
            </div>
            <div class="about__img">
                <img src="../assets/photos/target.jpg" alt="">
            </div>
        </div>
        <div class="about__box vision">
            <div class="about__img">
                <img src="../assets/photos/vision.jpg" alt="">
            </div>
            <div class="about__content">
                <h1>Vision</h1>
                <p class="indent">
                    Over the years, we have constantly improved our services at branches and supported customers through
                    online channels. Hoang Ha Mobile is committed to bringing quality products and prestigious warranty,
                    ready to support customers in the fastest time.
                </p>
                <p class="indent">
                    In the future, Hoang Ha Mobile will continue to expand its branch system, aiming to be present in 63
                    provinces and cities nationwide. At the same time, improve service quality, limit risks, listen and
                    absorb customers' suggestions to bring the best experience when shopping at Hoang Ha Mobile.
                </p>
                <p class="indent">
                    Finally, Hoang Ha Mobile hopes to become a pioneer in bringing the latest technology products to
                    users
                    as soon as possible, creating a modern life where technology connects people, technology serves
                    people.
                </p>
            </div>
        </div>

        <!-- Member -->
        <center style="user-select: none; margin-bottom: 25px">
            <span class="logo" style="display: inline-block; width: 500px; height: 50px">Members</span>
        </center>
        <div class="profile__container">
            <div class="profile">
                <div class="profile__inner">
                    <div class="profile__img">
                        <img src="https://images.unsplash.com/photo-1650832509066-a337a7683fbd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="">
                    </div>
                    <div class="profile__footer">
                        <h3 class="profile__name">Vũ Đức Anh</h3>
                        <center class="profile__locate">Leader</center>
                        <span class="profile_detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsa
                            quod
                            quam ab doloribus sint temporibus tempora.</span>
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
                        <h3 class="profile__name">Nguyễn Phan Anh</h3>
                        <center class="profile__locate">Developer</center>
                        <span class="profile_detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsa
                            quod
                            quam ab doloribus sint temporibus tempora.</span>
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
                        <img src="https://images.unsplash.com/photo-1651774034646-a354463bf516?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="">
                    </div>
                    <div class="profile__footer">
                        <h3 class="profile__name">Phan Trọng Dương</h3>
                        <center class="profile__locate">Developer</center>
                        <span class="profile_detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsa
                            quod
                            quam ab doloribus sint temporibus tempora.</span>
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
                        <img src="https://images.unsplash.com/photo-1651763087839-4221cf6e30a7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="">
                    </div>
                    <div class="profile__footer">
                        <h3 class="profile__name">Nguyễn Tấn Dũng</h3>
                        <center class="profile__locate">Developer</center>
                        <span class="profile_detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsa
                            quod
                            quam ab doloribus sint temporibus tempora.</span>
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

        <!-- Feedback -->
        <center style="user-select: none; margin-bottom: 25px">
            <span class="logo" style="display: inline-block; width: 500px; height: 50px">Feedback</span>
        </center>
        <div class="feedback__box">
            <?php
              if(count($feedbackList) > 0) {
                  foreach($feedbackList as $feedback) {
                      $date = strtotime($feedback['date']);
                      echo  "<div class='feedback__card'>
                                <div class='feedback__body'>
                                    <h3 class='feedback__title'>". ucfirst($feedback['title']) ."</h3>
                                    <div class='feedback__feeling ". $feedback['feeling'] ." '>". ucfirst($feedback['feeling']) ."</div>
                                    <p class='feedback__desc'>". ucfirst($feedback['description']) ."</p>
                                </div>
                                <div class='feedback__footer'>
                                    <div class='feedback__date'>Date: ". date('d/m/Y', $date) ."</div>
                                    <b class='feedback__name'>". $feedback['name'] ."</b>
                                    <p class='feedback__email'>". $feedback['email'] ."</p>
                                </div>
                            </div>";
                  }
              }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <?php
      include_once('../layout/footer.php');
    ?>
</body>

</html>