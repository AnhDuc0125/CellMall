<?php
  session_start();

  require_once("../database/dbContext.php");
  require_once("../database/utility.php");

  if(!empty($_POST)){
      $oldPassword = getPost('oldPassword');
      $newPassword = getPost('newPassword');

      //MD5 password
      $oldPassword = decodeValue($oldPassword);
      $newPassword = decodeValue($newPassword);

    // Check old password  
      if($oldPassword == $_SESSION['currentUser']['password']) {
          $resetSQL = "UPDATE users SET password = '$newPassword' WHERE id = ".$_SESSION['currentUser']['id'];
          execute($resetSQL);
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
                <h2 class="title">Reset Password</h2>
                <?php
                  if(!empty($_POST)){
                    echo '<p class="invalid">Incorrect Password!</p>'; 
                  } else {
                    echo '<p>Welcome to <span class="logo">CellMall</span></p>';
                  }
                ?>
            </div>
            <form method="post" id="reset">
                <div class="box__main">
                    <div class="form__item block">
                        <input maxlength="320" type="password" class="form__input" placeholder=" " id="oldPassword"
                            name="oldPassword">
                        <label class="form__label">Old Password</label>
                        <ion-icon name="lock-closed-outline" class="symbol"></ion-icon>
                        <span class="message"></span>
                    </div>
                    <div class="form__item block">
                        <input type="password" class="form__input" placeholder=" " id="newPassword" name="newPassword">
                        <label class="form__label">New Password</label>
                        <ion-icon name="lock-closed-outline" class="symbol"></ion-icon>
                        <span class="message"></span>
                    </div>
                    <div class="form__item block checkbox">
                        <input type="checkbox" class="form__checkbox" id="checkbox" name="rememberLogin" value="yes">
                        <label>Show password</label>
                    </div>
                </div>
                <div class="box__footer">
                    <button class="btn">Reset</button>
                    <a href="homePage.php" style="display: block">Back to home</a>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="../assets/js/validation.js"></script>
<script>
Validation({
    'form': '#reset',
    'rules': [
        isRequired('#oldPassword'),
        isRequired('#newPassword'),
        isStrongPw('#newPassword')
    ]
});

let checkBox = document.querySelector('#checkbox');
let pwField = document.querySelectorAll('input[type=password]');
checkBox.onclick = () => {
    if (checkBox.checked == true) {
        pwField.forEach((item) => {
            item.type = "text";
        })
    } else {
        pwField.forEach((item) => {
            item.type = "password";
        })
    }
}
</script>

</html>