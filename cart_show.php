<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>買い物かご画面</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<header>
    ヘッダー
</header>       
<body class="cart_main">
    <div>
    <?php require 'menu.php'; ?>

    <div class="main">
        <div class="box"> 
            <h1>カート</h1>
            <hr>
            <?php require 'cart_.php'; ?>
        </div>
        
    </div>

    <!-- <footer>
        @footer
    </footer> -->
</div>
</body>
</html>