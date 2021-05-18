<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>購入画面</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
<?php require 'menu.php'; ?>
    <?php
    require 'db_connect.php';
    //purchaseテーブル最終行 id+1を取得
    $purchase_id = 1;
    foreach ($pdo->query('select max(id) from purchase') as $row) {
        $purchase_id = $row['max(id)'] + 1;
    }
    //SQL文を作る
    $sql = "insert into purchase values(:id,:user_num)";
    //プリペアードステートメントを作る
    $stm = $pdo->prepare($sql);
    //プリペアードステートメントに値をバインドする
    $stm->bindValue(':id', $purchase_id, PDO::PARAM_INT);
    $stm->bindValue(':user_num', $_SESSION['user']['id'], PDO::PARAM_INT);
    if ($stm->execute()) {
        //SQL成功
        //セッションに入っている商品の数だけpurchase_detailに保存
        foreach ($_SESSION['product'] as $book_num => $product) {
            //SQL文
            $sql = "insert into purchase values(:num,:book_num,:count)";
            //プリペアードステートメントを作る
            $stm = $pdo->prepare($sql);
            //プリペアードステートメントに値をバインドする
            $stm->bindValue(':num', $num, PDO::PARAM_INT);
            $stm->bindValue(':book_num', $book_num, PDO::PARAM_INT);
         
            //SQL文を実行
            $stm->execute();
        }
        unset($_SESSION['product']);
        print '注文を確定しました。';
    } else {
        //SQL失敗
        print "購入手続き中にエラーが発生しました。申し訳ございません。";
    }
    ?>
</body>

</html>