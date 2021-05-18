<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>会員登録画面</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<body>
	<?php require 'menu.php'; ?>
    <form action="user_output.php" method="post">
	<table>
	<tr><th><label for="name" >名前</label></th>
	<td><input type="text" name="name" value=""></td>
	</tr>
	<tr><th><label for="mail">メールアドレス</label></th>
	<td><input type="text" name="mail" value=""></td>
	</tr>
	<tr><th><label for="password">パスワード</label></th>
	<td><input type="password" name="password" value="" placeholder="6~20文字"></td>
	</tr>
	<tr><th><label for="password2">パスワード(確認用)</label></th>
	<td> <input type="password" name="password2" value=""></td>
	</tr>
	<tr><th></th><td><input type="submit" value="登録"></td></tr>
	</table>
</body>
