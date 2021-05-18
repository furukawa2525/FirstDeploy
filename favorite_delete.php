<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>お気に入り画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php require 'menu.php'; ?>
	<?php
	if (isset($_SESSION['user'])) {
	//MySQLデータベースに接続する
	require 'db_connect.php';
	//SQL文を作る（プレースホルダを使った式）
	$sql = "delete from favorite where user_num = :user_num and book_num = :book_num";
	//プリペアードステートメントを作る
	$stm = $pdo->prepare($sql);
	//プリペアードステートメントに値をバインドする
	$stm->bindValue(':user_num', $_SESSION['user']['num'], PDO::PARAM_STR);
	$stm->bindValue(':book_num', $_REQUEST['num'], PDO::PARAM_STR);
	//SQL文を実行する
	$stm->execute();
	//結果の取得（連想配列で受け取る）
	$result = $stm->fetchAll(PDO::FETCH_ASSOC);
	?>
		お気に入りから商品を削除しました。
		<hr>
	<?php
	} else {
	?>
		お気に入りから商品を削除するには、ログインしてください。
	<?php
	}
	require 'favorite.php';
	?>
</body>

</html>