<!-- <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css?family=Corben:700" rel="stylesheet"> -->

<div class="header"> 
        <!-- ロゴ・アイコン/孫要素 -->
        <!-- トップ画面に戻る -->
        <a href="index.php">
            <div class="logo">
                    <div class="icon">
                        <i class="fas fa-bahai size"></i>
                </div>
                <div class="title">
                    <h1>Kamison</h1>
                </div>
            </div>
        </a>
<?php //ログイン前は表示されないように処理
if (isset($_SESSION['user'])) {
?>
    <div class="item purchase_check">
        <a href="history.php"><i class="fas fa-shopping-basket nav_size"></i></a>
        <a href="history.php"><p>購入履歴</p></a>
    </div>
<?php
}
?>

<?php
if ((isset($_SESSION['user']))) {
?>
<div class="item cart">
        <a href="cart_show.php"><i class="fas fa-cart-plus nav_size"></i></a>
        <a href="cart_show.php"><p>カート</p></a>
    </div>
<?php
}
?>

<?php
if ((isset($_SESSION['user']))) {
?>
<div class="item buy">
        <a href="purchase_input.php"><i class="fas fa-money-check-alt"></i></a>
        <a href="purchase_input.php"><p>購入</p></a>
</div>
<?php
}
?>

<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['user']))) {
?>
<div class="item login">
    <a href="login_input.php"><i class="fas fa-sign-in-alt nav_size"></i></a>
    <a href="login_input.php"><p>ログイン</a></p>
</div>
<?php
}
?>

<?php //ログイン前は表示されないように処理
if (isset($_SESSION['user'])) {
?>
<div class="item login">
    <a href="logout_input.php"><i class="fas fa-sign-in-alt nav_size"></i></a>
    <a href="logout_input.php"><p>ログアウト</p></a>
</div>
<?php
}
?>

<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['user']))) {
?>
<div class="item user_input">
        <a href="user_input.php"><i class="fas fa-users nav_size"></i></a>
        <a href="user_input.php"><p>会員登録</p></a>
    </div>
<?php
}
?>
</div>
<hr>
