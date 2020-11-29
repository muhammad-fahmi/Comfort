<?php



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" name="formInput" onsubmit="validasiEmail();">
                <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
                <input id="user-email" class="form-content" type="text" name="email" autocomplete="off" required />
                <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>
                <a href="#">
                    <legend id="forgot-pass">Forgot password?</legend>
                </a>
                <input id="submit-btn" type="submit" name="submit" value="LOGIN" /><a href="../register/index.php"
                    id="signup">Don't have
                    account yet?</a>
            </form>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>