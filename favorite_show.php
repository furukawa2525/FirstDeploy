<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>お気に入り画面</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <header>
        ヘッダー
    </header>

    <?php require 'menu.php'; ?>

    <div class="box">
        <div class="favorite_box">
            <div class="favorite_h1">
                <h1>お気に入り</h1>
                <hr>
            </div>

            <?php
            require 'favorite.php';
            ?>
        </div>
    </div>
</body>

</html>