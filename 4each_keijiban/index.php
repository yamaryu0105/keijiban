<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4eachcblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="logo"><img src="4eachblog_logo.jpg" alt="4eachblog"></div>

<body>
<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt = $pdo->query("select * from 4each_keijiban");


?>
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        <form method="post" action="insert.php">
            <div>
                <h3>入力フォーム</h3>
            </div>

            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="35" name="handlename">
            </div>

            <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="35" name="title">
            </div>

            <div>
                <label>コメント</label>
                <br>
                <textarea cols="35" name="comments" rows="4"></textarea>
            </div>

            <div>
                <input type="submit" class="submit" value="投稿する">
            </div>
        </form>
        
    
       <?php
        while ($row = $stmt->fetch()){

        echo "<div class='keiji1'>";
        echo "<h4>".$row['title']."</h4>";
        echo "<div class='comments'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
        echo "</div>";
          }

        ?>
        <?php
        while ($row = $stmt->fetch()){

        echo "<div class='keiji2'>";
        echo "<h4>".$row['title']."</h4>";
        echo "<div class='comments'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
        echo "</div>";
          }

        ?>
    </div>   
    
    <div class="right">
        <h2>人気記事</h2>
        <div class="rul">
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>
        </div>
        <h2>オススメリンク</h2>
        <div class="rul"></div>
        <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Braketsのダウンロード</li>
        </ul>
        <h2>カテゴリ</h2>
        <div class="rul"></div>
        <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
    </div>

    <div class="under">
    </div>
</body>
<footer class="ftr">
    copyright ©︎ internous | 4each blog the which provides A to Z about programming.
</footer>

</html>