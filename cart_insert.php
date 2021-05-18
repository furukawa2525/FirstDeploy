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
	$id = $_REQUEST['num'];
	if (!isset($_SESSION['book'])) {
		$_SESSION['book'] = [];
	}
	$count = 1;


	$_SESSION['book'][$id] = [
		'name' => $_REQUEST['name'],
		'price' => $_REQUEST['price'],
	];
	?>

	<p>カートに商品を追加しました。</p>
	<hr>
	<?php
	require 'cart_.php';
	?>
</body>

</html>