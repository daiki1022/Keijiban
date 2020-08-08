<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?PHP

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=daiki;host=localhost;", "root","");
$stmt = $pdo->query("select * from 4each_keijiban");
    

    
?>
    

    


    <img src="4eachblog_logo.jpg">
<!--part of header-->
<!--part of menu-->
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
<!--part of main-->
<!--part of left-->
    <main>
        <div class="main-container">
        <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        
    <form method="post" action="insert.php">
    <h2>入力フォーム</h2>
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
      <textarea cols="50" rows="7" name="comments"></textarea>
    </div>

    <div>
      <input type="submit" class="submit" value="投稿する">
    </div>
  </form>

<!--kiji-->
<?php while($row=$stmt->fetch()){
    echo "<div class='kiji'>";
    echo "<h3>".$row['title']."</h3>";
    echo "<div class='contents'>";
    echo $row['comments'];
    echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
    echo "</div>";
    echo "</div>";
}
?>    
</div>
            
<!--part of right-->
        <div class="right">
          <h4>人気の記事</h4>
          <ul class="menu2">
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
          </ul>
          <h4>オススメリンク</h4>
          <ul class="menu2">
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
          </ul>
          <h4>カテゴリ</h4>
          <ul class="menu2">
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
          </ul>
        </div>
    </div>
        
</main>
<!--part of footer-->
  <footer>
    <p><small>copyright © internous | 4each blog the which provides A to Z about programming.</small><p>
  </footer>

</body>
</html>