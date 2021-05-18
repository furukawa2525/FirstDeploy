<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>買い物かご画面</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php require 'menu.php'; ?>
    <?php
    unset($_SESSION['book'][$_REQUEST['num']]);
    ?>
    カートから商品を削除しました。
    <hr>
    <?php
    require 'cart_.php';
    ?>
    
</body>
</html>