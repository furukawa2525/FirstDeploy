<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>会員登録画面</title>
	<link rel="stylesheet" href="css/user_input.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<body>
	<div class="header">
		<?php require 'menu.php'; ?>
	</div>


<div class="wrapper">
    <form action="user_output.php" method="post">

	<table class="form-table">
	<tr>
		<th><label for="name" >氏名</label></th>
		<td><input type="text" name="name" size="60" value="" placeholder="氏名"></td>
	</tr>
	<tr>
		<th><label for="address">メールアドレス</label></th>
		<td><input type="text" name="mail" size="60" value="" placeholder="sample@sample.jp"></td>
	</tr>
	<tr>
		<th><label for="password">パスワード</label></th>
		<td><input type="password" name="password" value="" placeholder="6~20文字"></td>
	</tr>
	<tr>
		<th><label for="password2">パスワード<br>(確認用)</label></th>
		<td> <input type="password" name="password2" value="" placeholder="再確認"></td>
	</tr>
	</table>
</div>



	<!-- ボタン -->
	<div class="container">
		<a href="user_output.php" class="btn-denim">SignUp</a>
	</div>
</body>