<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="css/login_input.css">
</head>


<body>
    <?php require 'menu.php'; ?>
    <!-- <form action="login_output.php" method="post">
    <h1>Login</h1>
        <input type="text" name="mail" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button>Login</button>
    </form> -->


    <div class="form-wrapper">
        <h1>Login</h1>
        <form action="login_output.php" method="post">
            <div class="form-item">
                <label for="email">
                <input type="text" name="mail" required="required" placeholder="Emil Address"><br>
                </label>
            </div>
            <div class="form-item">
                <label for="password">
                <input type="password" name="password" placeholder="Password"><br>
                </label>
            </div>
            <div class="button-panel">
                <input type="submit" class="button" title="Sign In" value="Login">
            </div>
        </form>
    </div>
</body>
</html>