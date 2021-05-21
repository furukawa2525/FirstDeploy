<?php session_start(); ?>

<?php
	//customerセッション変数を破棄
	unset($_SESSION['user']);
	//MySQLデータベースに接続する
	require 'db_connect.php';
	//SQL文を作る（プレースホルダを使った式）
	$sql = "select * from user where mail = :mail and password = :password";
	//プリペアードステートメントを作る
	$stm = $pdo->prepare($sql);
	//プリペアードステートメントに値をバインドする
	$stm->bindValue(':mail',$_POST['mail'],PDO::PARAM_STR);
	$stm->bindValue(':password',$_POST['password'],PDO::PARAM_STR);
	//SQL文を実行する
	$stm->execute();
	//結果の取得（連想配列で受け取る）
	$result = $stm->fetchAll(PDO::FETCH_ASSOC);
	//customerセッションの設定
	foreach ($result as $row) {
		$_SESSION['user'] = [
			'name' => $row['name'],
			'mail' => $row['mail'],
			'password' => $row['password'],
		];
	}
?>


<html>

<head>
	<meta charset="UTF-8">
	<title>ログイン画面</title>
	<!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
	<?php
	require 'menu.php';
	if (isset($_SESSION['user'])) {
		echo 'ようこそ', $_SESSION['user']['name'], 'さん。';
	} else {
		echo 'メールアドレスまたはパスワードが違います。';
	}
	?>
</body>

</html>