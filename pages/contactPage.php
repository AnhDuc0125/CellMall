<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CellMall | Contact Us</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../assets/css/master.css">
    <link rel="stylesheet" href="../assets/css/layouts/navbar.css" />
    <link rel="stylesheet" href="../assets/css/layouts/footer.css" />
    <link rel="stylesheet" href="../assets/css/pages/contactPage.css">
</head>

<body>
    <!-- Navbar and Component -->
    <?php
      include_once('../layout/navbar.php');
    ?>
    <div id="main">
        <div class="contact__box">
            <div class="contact__left">
                <img src="../assets/photos/contact.jpg" alt="">
                <div class="contact__detail">
                    <h1 class="logo">CellMall</h1>
                    <table>
                        <tr>
                            <th>
                                <ion-icon name="home-outline" class="logo__icon"></ion-icon>
                            </th>
                            <td>A-65, ACME Co., Street no 12, New York</td>
                        </tr>
                        <tr>
                            <th>
                                <ion-icon name="phone-portrait-outline" class="logo__icon"></ion-icon>
                            </th>
                            <td>+001-28272300, 2466, 2469</td>
                        </tr>
                        <tr>
                            <th>
                                <ion-icon name="mail-outline" class="logo__icon"></ion-icon>
                            </th>
                            <td><a href="mailto:webmaster@cellinfo.com" target="_blank">webmaster@cellinfo.com</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="contact__right">
                <div class="contact__form">
                    <h1 class="contact__title">
                        <center>CONTACT TO US</center>
                    </h1>
                    <form method="post" id="contact">
                        <div class="form__main">
                            <div class="form__item block">
                                <input type="text" class="form__input" placeholder=" " id="name" name="name">
                                <label class="form__label">Name</label>
                                <ion-icon name="person-outline" class="form__symbol"></ion-icon>
                                <span class="message"></span>
                            </div>
                            <div class="form__item block">
                                <input maxlength="320" type="email" class="form__input" placeholder=" " id="email"
                                    name="email">
                                <label class="form__label">Email</label>
                                <ion-icon name="at-outline" class="form__symbol"></ion-icon>
                                <span class="message"></span>
                            </div>
                            <div class="form__item block">
                                <input type="number" class="form__input" placeholder=" " id="phone" name="phone">
                                <label class="form__label">Phone</label>
                                <ion-icon name="call-outline" class="form__symbol"></ion-icon>
                                <span class="message"></span>
                            </div>
                            <div class="form__item block">
                                <textarea placeholder=" " name="message" id="message" cols="30" rows="10"></textarea>
                                <label class="form__label">Message</label>
                                <ion-icon name="chatbox-outline" class="form__symbol"></ion-icon>
                                <span class="message"></span>
                            </div>
                        </div>
                        <div class="form__footer">
                            <button class="btn">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../assets/js/validation.js"></script>
<script>
Validation({
    'form': '#contact',
    'rules': [
        isRequired('#name'),
        isRequired('#email'),
        isRequired('#phone'),
        isRequired('#message'),
        isEmail('#email')
    ]
});
</script>

</html>