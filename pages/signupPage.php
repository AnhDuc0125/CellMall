<?php
  session_start();

  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

  if(!empty($_POST)){
      $fullname = getPost("fullname");
      $username = getPost("username");
      $address = getPost("address");
      $email = getPost("email");
      $phone = getPost("phone");
      $password = getPost("password");

      $password = decodeValue($password);

    // Check unique of email
    $emailSQL = "SELECT * FROM users WHERE email = '$email'";
    $emailResult = executeResult($emailSQL, true);
    if($emailResult == null) {
        // Create account
          $signup = "INSERT INTO users (fullname, username, address, email, phone, password) VALUES ('$fullname', '$username', '$address', '$email', '$phone', '$password')";
          execute($signup);
    
          header("Location: loginPage.php");
    }
  }    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | CellMall</title>
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
                <h2 class="title">Sign Up</h2>
                <?php
                  if(!empty($_POST)){
                      echo '<p class="invalid">Existed E-mail, please use another E-mail!</p>';
                  } else {
                      echo '<p>Welcome to <span class="logo">CellMall</span></p>';
                  }
                ?>
            </div>
            <form method="post" id="signup">
                <div class="box__main">
                    <div class="form__item block">
                        <input type="text" class="form__input" placeholder=" " id="fullname" name="fullname">
                        <label class="form__label">Full Name</label>
                        <ion-icon name="text-outline" class="symbol"></ion-icon>
                        <span class="message"></span>
                    </div>
                    <div class="form__item block">
                        <input type="text" class="form__input" placeholder=" " id="username" name="username">
                        <label class="form__label">Username</label>
                        <ion-icon name="person-outline" class="symbol"></ion-icon>
                        <span class="message"></span>
                    </div>
                    <div class="form__item block">
                        <input type="text" class="form__input" placeholder=" " id="address" name="address">
                        <label class="form__label">Address</label>
                        <ion-icon name="home-outline" class="symbol"></ion-icon>
                        <span class="message"></span>
                    </div>
                    <div class="form__item">
                        <input maxlength="320" type="email" class="form__input" placeholder=" " id="email" name="email">
                        <label class="form__label">Email</label>
                        <ion-icon name="at-outline" class="symbol"></ion-icon>
                        <span class="message"></span>
                    </div>
                    <div class="form__item">
                        <input maxlength="16" type="number" class="form__input" placeholder=" " id="phone" name="phone">
                        <label class="form__label">Phone Number</label>
                        <ion-icon name="call-outline" class="symbol"></ion-icon>
                        <span class="message"></span>
                    </div>
                    <div class="form__item">
                        <input type="password" class="form__input" placeholder=" " id="password" name="password">
                        <label class="form__label">Password</label>
                        <ion-icon name="lock-closed-outline" class="symbol"></ion-icon>
                        <span class="message"></span>
                    </div>
                    <div class="form__item">
                        <input type="password" class="form__input" placeholder=" " id="confirmPw">
                        <label class="form__label">Confirm Password</label>
                        <ion-icon name="lock-closed-outline" class="symbol"></ion-icon>
                        <span class="message"></span>
                    </div>
                </div>
                <div class="box__footer">
                    <button class="btn">Sign up</button>
                    <p>Already have an account? <a href="loginPage.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="../assets/js/validation.js"></script>
<script>
Validation({
    'form': '#signup',
    'rules': [
        isRequired('#fullname'),
        isRequired('#username'),
        isRequired('#email'),
        isRequired('#phone'),
        isRequired('#password'),
        isRequired('#confirmPw'),
        isRequired('#address'),
        isEmail('#email'),
        isPhone('#phone'),
        isStrongPw('#password'),
        minLength('#fullname', 8),
        minLength('#fullname', 5),
        confirmPassword('#confirmPw', function() {
            return document.querySelector('#password').value;
        })
    ]
})
</script>

</html>