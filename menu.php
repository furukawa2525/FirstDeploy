<a href="book.php">トップ</a>
<a href="favorite_show.php">お気に入り</a>
<a href="history.php">購入履歴</a>
<a href="cart_show.php">カート</a>
<a href="purchase_input.php">購入</a>
<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['user']))) {
?>
<a href="login_input.php">ログイン</a>
<?php
}
?>

<?php //ログイン前は表示されないように処理
if (isset($_SESSION['user'])) {
?>
    <a href="logout_input.php">ログアウト</a>
<?php
}
?>

<?php //ログイン後は表示されないように処理
if (!(isset($_SESSION['user']))) {
?>
<a href="user_input.php">会員登録</a>
<?php
}
?>
<hr>