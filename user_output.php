<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>会員登録画面</title>
	<link rel="stylesheet" href="user_output.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" /> -->
</head>
<body>
<!-- <i style="color:darkblue;" class="fas fa-crow"></i> -->
	<?php require 'menu.php'; ?>
	<?php
	
	//MySQLデータベースに接続する
	require 'db_connect.php';
	//SQL文を作成する
	$sql = "INSERT INTO user VALUES(null,:name,:mail,:password)";
	//プリペアードステートメントを作成
	$stm = $pdo->prepare($sql);
	$stm->bindValue(':name',$_POST['name'],PDO::PARAM_STR);
	$stm->bindValue(':mail',$_POST['mail'],PDO::PARAM_STR);
	$stm->bindValue(':password',$_POST['password'],PDO::PARAM_STR);
	//SQL文を実行
	$stm->execute();
	echo '会員登録が完了しました。'
	?>
</body>
</html>