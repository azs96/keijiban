<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset = "utf-8">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" style="text/css" href="style.css">
</head>

<body>
  <header>
    <img src="4eachblog_logo.jpg">
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>お問い合わせ</li>
      <li>その他</li>
    </ul>
  </header>
  <main>

    <div class="left">
      <h1>プログラミングに役立つ掲示板</h1>
        <form method="post" action="insert.php">
          <h2>入力フォーム</h2>
          <label>ハンドルネーム</label>
            <br>
            <input type="text" size="35" name="handlename">
          <label><br>タイトル
            <br>
            <input type="text" size="35" name="title">
          </label>
          <label><br>コメント
            <br>
            <textarea rows="10" cols="40" name="comments"></textarea>
          </label>
          <label>
            <br>
            <input type="submit" class="submit" value="投稿する">
          </label>
        </form>
      
      <?php
      mb_internal_encoding("utf8");

      $pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","mysql");
      $stmt = $pdo->query("select * from 4each_keijiban");

      while($row = $stmt->fetch()){
        echo "<div class='posts'>";
        echo "<h3>".$row['title']."</h3>";
        echo "<div class='contents'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div></div>";
      }

      ?>
      
     
    </div>

    <div class="right">
      <h2>人気の記事</h2>
      <p>PHPオススメ本</p>
      <p>PHP MyAdminの使い方</p>
      <p>今人気のエディタ Top5</p>
      <p>HTMLの基礎</p>

      <h2>オススメリンク</h2>
      <p>インターノウス株式会社</p>
      <p>XAMPPのダウンロード</p>
      <p>Eclipseのダウンロード</p>
      <p>Bracketsのダウンロード</p>

      <h2>カテゴリ</h2>
      <p>HTML</p>
      <p>PHP</p>
      <p>MySQL</p>
      <p>JavaScript</p>
    </div>
  </main>

  <footer>
    <p>copyright (c) internous | 4each blog which provides A to Z about programming.</p>
  </footer>
</body>



