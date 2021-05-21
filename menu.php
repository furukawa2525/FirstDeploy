<link rel="stylesheet" href="css/menu.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<!-- <link href="https://fonts.googleapis.com/css?family=Corben:700" rel="stylesheet">  -->


<!-- 全部のヘッダー部分 -->
<div class="header">

<!-- ------------------------------------------------------------ -->

    <!-- ロゴ部分開始 -->
    <div class="logo_wrapper">
    <!-- トップ画面に戻る -->
            <div class="element logo">
                <a href="index.php"><img src="images/home.svg" alt=""></a>
            </div>
            <div class="element title">
                <a href="index.php"><p>Kamison</p></a>
            </div>
    </div>
    <!-- ロゴの部分・タイトルはここまで -->

<!-- ------------------------------------------------------------- -->

    <!-- ナビゲーション部分開始 -->
    <div class="nav_wrapper">
        <?php //ログイン前は表示されないように処理
            if (isset($_SESSION['user'])) {
        ?>
    <!-- 購入履歴 -->
        <div class="box purchase_check">
            <div class="element logo">
                <a href="history.php"><img src="images/history.svg" alt=""></a>
            </div>
            <div class="element title">
                <a href="history.php"><p>購入履歴</p></a>
            </div>
        </div>
            <?php
            }
        ?>

<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['user']))) {
?>
    <!-- カート -->
        <div class="box cart">
            <div class="element logo">
                <a href="cart_show.php"><img src="images/cart.svg" alt=""></a>
            </div>
            <div class="element title">
                <a href="cart_show.php"><p>カート</p></a>
            </div>
        </div>
<?php
}
?>

<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['user']))) {
?>
    <!-- 購入 -->
        <div class="box buy">
            <div class="element logo">
                <a href="purchase_input.php"><img src="images/buy.svg" alt="サンプル画像"></a>
            </div>
            <div class="element title">
                <a href="purchase_input.php"><p>購入</p></a>
            </div>
        </div>
<?php
}
?>


<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['user']))) {
?>
    <!-- ログイン -->
        <div class="box login">
            <div class="element logo">
                <a href="login_input.php"><img src="images/login.svg" alt=""></a>
            </div>
            <div class="element title">
                <a href="login_input.php"><p>ログイン</a></p>
            </div>
        </div>
<?php
}
?>

<?php //ログイン前は表示されないように処理
if (isset($_SESSION['user'])) {
?>
    <!-- ログアウト -->
        <div class="box logout">
            <div class="element logo">
                <a href="logout_input.php"><img src="images/logout.svg" alt=""></a>
            </div>
            <div class="element title">
                <a href="logout_input.php"><p>ログアウト</p></a>
            </div>
        </div>
<?php
}
?>

<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['user']))) {
?>
    <!-- 会員登録 -->
        <div class="box user_input">
            <div class="element logo">
                <a href="user_input.php"><img src="images/account.svg" alt=""></a>
            </div>
            <div class="element title">
                <a href="user_input.php"><p>会員登録</p></a>
            </div>
        </div>
<?php
}
?>
    </div>
<!-- ナビゲーション部分ここまで -->
<!-- -------------------------------------------------------- -->
</div>
<hr>