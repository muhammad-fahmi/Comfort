<?php
session_start();
require "../functions.php";

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];


    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");


    // set session
    $_SESSION['login'] = 'true';

    // cek email
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            if ($row['role'] == 'admin') {
                $_SESSION["admin"] = 'true';
            }
            header("Location: ../index.php");
            exit;
        }
    }

    $error = true;
}

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
            <?php if (isset($error)) : ?>
                <p style="color:red; font-style:italic;">Email / Password Salah!</p>
            <?php endif ?>
            <form method="POST" class="form" name="formInput">
                <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
                <input id="user-email" class="form-content" type="email" name="email" autocomplete="off" required />
                <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>
                <br>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me" name="remember">Remember me
                    </label>
                </div>

                <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
                <a href="../register/register.php" id="signup">Don't have account yet?</a>
            </form>
        </div>
    </div>
</body>

</html>