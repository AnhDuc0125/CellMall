<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | FoneMart</title>
    <link rel="stylesheet" href="../assets/css/form.css">
</head>

<body>
    <form method="post" id="login">
        <div class="box">
            <div class="box__header">
                <h1>LOG IN</h1>
            </div>
            <div class="box__main">
                <div class="form__item block">
                    <input type="email" class="form__input" placeholder=" " id="email">
                    <label class="form__label">Email</label>
                    <span class="message"></span>
                </div>
                <div class="form__item block">
                    <input type="password" class="form__input" placeholder=" " id="password">
                    <label class="form__label">Password</label>
                    <span class="message"></span>
                </div>
            </div>
            <div class="box__footer">
                <button class="btn">Log In</button>
                <a href="signup.php">Create an account</a>
            </div>
        </div>
    </form>
</body>
<script src="../assets/js/validation.js"></script>
<script>
Validation({
    'form': '#login',
    'rules': [
        isRequired('#email'),
        isRequired('#password'),
        isEmail('#email')
    ]
})
</script>

</html>