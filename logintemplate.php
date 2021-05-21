<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ログイン画面</title>
	<link rel="stylesheet" href="style.css">
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



<?php session_start(); ?>

<?php
    unset($_SESSION['customer']);

    try {
        $pdo = new PDO(
            'mysql:dbname=book;host=localhost;charset=utf8mb4',
            'book',
            'bookpass');
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (Exception $e) {
        echo '<span class="error">エラーがありました。</span><br>';
        echo $e->getMessage();
        exit();
    }

    $sql = "select * from customer where name = :name and password = :password";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':name', $_POST['name'],PDO::PARAM_STR);
    $stm->bindValue(':password',$_POST['password'],PDO::PARAM_STR);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        $_SESSION['customer'] = [
            'id' => $row['id'], 'name' =>$row['name'],
            'password' => $row['password']
        ];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>
<body>
    <?php
        if (isset($_SESSION['customer'])) {
            echo 'ログインしました。';
        } else {
            echo 'ログイン名またはパスワードが違います。';
        }
    ?>

</body>
</html>