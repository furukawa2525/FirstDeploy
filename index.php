<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <?php require 'menu.php'; ?>

<!-- ---------------------------------------------------- -->
    <!-- 親要素 -->
    <!-- <div class="wrapper"> -->
        <div class="contents">
             <!-- サイド部分 -->
             <aside>
                <h2>カテゴリー</h2>
                   <ul>
                       <li><a href="#">文学・評論</a></li> 
                       <li><a href="#">人文・思想</a></li>
                       <li><a href="#">社会・政治</a></li>
                       <li><a href="#">ノンフィクション</a></li>
                       <li><a href="#">歴史・地理</a></li>
                       <li><a href="#">ビジネス・経済</a></li>
                       <li><a href="#">投資・金融・会社経営</a></li>
                       <li><a href="#">科学・テクノロジー</a></li>
                       <li><a href="#">医学・薬品</a></li>
                       <li><a href="#">コンピュータ・IT</a></li>
                       <li><a href="#">アート・建築・デザイン</a></li>
                       <li><a href="#">実用・ホビー</a></li>
                       <li><a href="#">スポーツ・アウトドア</a></li>
                       <li><a href="#">資格・検定</a></li>
                       <li><a href="#">暮らし・健康・子育て</a></li>
                       <li><a href="#">旅行ガイド・マップ</a></li>
                       <li><a href="#">語学・辞典後・年鑑</a></li>
                       <li><a href="#">教育・学参・受験</a></li>
                       <li><a href="#">絵本・児童書</a></li>
                       <li><a href="#">コミック</a></li>
                       <li><a href="#">ライトノベル</a></li>
                   </ul>
                   <h2>著者</h2>
                   <ul>
                    <li><a href="#">著者名</a></li>
                    <li><a href="#">著者名</a></li> 
                    <li><a href="#">著者名</a></li> 
                    <li><a href="#">著者名</a></li> 
                    <li><a href="#">著者名</a></li> 
                   </ul>
                   <h2>出版社</h2>
                   <ul>
                    <li><a href="#">A社</a></li>
                    <li><a href="#">B社</a></li> 
                    <li><a href="#">C社</a></li> 
                    <li><a href="#">D社</a></li> 
                    <li><a href="#">E社</a></li> 
                   </ul>
           </aside> 
        <!-- メイン部分 -->
        <div class="main_center">
            <!-- メイン上段 -->
            <h2>おすすめ</h2>
            <div class="main-contents grid">
                <div class="item">
                    <a href="detail.php"><img src="images\menu2.jpg" alt="#"></a>
                    <a href="detail.php"><p>星の王子さま</p></a>
                    <h3>¥900</h3>
                </div>
                <div class="item">
                    <a href="遷移先ページ2"><img src="images\menu3.jpg" alt="#"></a>
                    <a href="#"><p>アルケミスト</p></a>
                    <h3>¥1000</h3>
                </div>
                <div class="item">
                    <a href="遷移先ページ3"><img src="images\menu4.jpg" alt="#"></a>
                    <a href="#"><p>リバース</p></a>
                    <h3>¥1000</h3>
                </div>
                <div class="item">
                    <a href="遷移先ページ4"><img src="images\menu5.jpg" alt="#"></a>
                    <a href="#"><p>罪の声</p></a>
                    <h3>¥1000</h3>
                </div>
                <div class="item">
                    <a href="遷移先ページ5"><img src="images\menu6.jpg" alt="#"></a>
                    <a href="#"><p>13階段</p></a>
                    <h3>¥1000</h3>
                </div>
                <div class="item">
                    <a href="遷移先ページ6"><img src="images\menu7.jpg" alt="#"></a>
                    <a href="#"><p>悪意</p></a>
                    <h3>¥1000</h3>
                </div>
            </div>
            <!-- メイン下段 -->
            <h2>タイトル</h2>
            <div class="sub-contents grid">
                <div class="item">
                    <a href="遷移ページ１"><img src="images\menu2.jpg" alt="#"></a>
                    <a href="#"><p>タイトルが入ります</p></a>
                    <h3>¥1000</h3>
                </div>
                <div class="item">
                    <a href="遷移ページ2"><img src="images\menu3.jpg" alt="#"></a>
                    <a href="#"><p>タイトルが入ります</p></a>
                    <h3>¥1000</h3>
                </div>
                <div class="item">
                    <a href="遷移ページ3"><img src="images\menu4.jpg" alt="#"></a>
                    <a href="#"><p>タイトルが入ります</p></a>
                    <h3>¥1000</h3>
                </div>
                <div class="item">
                    <a href="遷移ページ4"><img src="images\menu5.jpg" alt="#"></a>
                    <a href="#"><p>タイトルが入ります</p></a>
                    <h3>¥1000</h3>
                </div>
                <div class="item">
                    <a href="遷移ページ5"><img src="images\menu6.jpg" alt="#"></a>
                    <a href="#"><p>タイトルが入ります</p></a>
                    <h3>¥1000</h3>
                </div>
                <div class="item">
                    <a href="遷移先ページ6"><img src="images\menu7.jpg" alt="#"></a>
                    <a href="#"><p>タイトルが入ります</p></a>
                    <h3>¥1000</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
</body>
</html>