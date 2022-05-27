<?php
    session_start();

    if(!empty($_GET)) {
        if($_GET['logout'] == true) {
           unset($_SESSION['adminAccount']);
           header("Location: login.php");
        }
}

    require_once("../database/dbContext.php");
    require_once("../database/utility.php");

    if(!empty($_POST)) {
        $email = getPost('email');
        $password = getPost('password');

        if($email == 'admin@gmail.com' && $password == '123456') {
            $_SESSION['adminAccount'] = true;
            header("Location: index.php");
            die();
        }
    }

  include_once("./layouts/header.php");
?>

<body>
    <div class="card mx-auto mt-5" style="width: 500px">
        <h2 class=" card-header bg-primary text-white">Login</h2>
        <div class="card-body">
            <form method="POST">
                <?php
                  if(!empty($_POST)) {
                      echo "<p style='color: red'>Wrong email or password</p>";
                  }
                ?>
                <div class="form-floating mb-3 mt-3">
                    <input type="email" class="form-control" name="email" id="floatingInput"
                        placeholder="Input email (admin@gmail.com)">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="floatingPassword"
                        placeholder="Input password (123456)">
                    <label for="floatingPassword">Password</label>
                </div>
                <button type="submit" class="btn btn-success">LOGIN</button>
            </form>
        </div>
    </div>
</body>

</html>