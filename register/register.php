<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>REGISTER</h2>
                <div class="underline-title"></div>
            </div>
            <form method="POST" class="form" name="formInput" onsubmit="validasiEmail();">
                <label for="user-username" style="padding-top:13px">&nbsp;Username</label>
                <input id="user-username" class="form-content" type="text" name="username" autocomplete="off" required />
                <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>

                <input id="submit-btn" type="submit" name="register" value="REGISTER" />
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>