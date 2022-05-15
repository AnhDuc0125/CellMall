<?php
  session_start();

  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

  if(!empty($_POST)){
      $email = getPost("email");
      $password = getPost("password");
      $rememberLogin = getPost("rememberLogin");

      $password = decodeValue($password);

      $login = "select * from users where email = '$email' and password = '$password'";
      $user = executeResult($login, true);

      if(!empty($user)) {
        $_SESSION['currentUser'] = $user;
        header("Location: homePage.php");
      }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | CellMall</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../assets/css/master.css">
    <link rel="stylesheet" href="../assets/css/pages/form.css">
</head>

<body>
    <div class="box__outter">
        <!-- Background -->
        <div class="background">
            <img src="../assets/photos/background.jpg" alt="">
        </div>

        <!-- Box Form -->
        <div class="box">
            <div class="box__header">
                <h2 class="title">Login</h2>
                <p>Welcome to <span class="logo">CellMall</span></p>
                <p class="login__error" style="color: red">
                    <?php
                        if(!empty($_POST)){
                            echo 'Incorrect Email or Password!';
                        }
                    ?>
                </p>
            </div>
            <form method="post" id="login">
                <div class="box__main">
                    <div class="form__item block">
                        <input maxlength="320" type="email" class="form__input" placeholder=" " id="email" name="email">
                        <label class="form__label">Email</label>
                        <ion-icon name="at-outline" class="symbol"></ion-icon>
                        <span class="message"></span>
                    </div>
                    <div class="form__item block">
                        <input type="password" class="form__input" placeholder=" " id="password" name="password">
                        <label class="form__label">Password</label>
                        <ion-icon name="lock-closed-outline" class="symbol"></ion-icon>
                        <span class="message"></span>
                    </div>
                    <div class="form__item block checkbox">
                        <input type="checkbox" class="form__checkbox" id="checkbox" name="rememberLogin" value="yes">
                        <label>Show password</label>
                    </div>
                </div>
                <div class="box__footer">
                    <button class="btn">Log In</button>
                    <p>Not a member? <a href="signupPage.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="./assets/js/validation.js"></script>
<script>
Validation({
    'form': '#login',
    'rules': [
        isRequired('#email'),
        isRequired('#password'),
        isEmail('#email'),
    ]
});

let checkBox = document.querySelector('#checkbox');
let pwField = document.querySelector('input[type=password]');
checkBox.onclick = () => {
    if (checkBox.checked == true) {
        pwField.type = "text";
    } else {
        pwField.type = "password";
    }
}
</script>

</html>