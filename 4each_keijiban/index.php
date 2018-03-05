<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>



    
    
  
    
    
    
    
    
<body>
    
<div class="logo">
    <img src="4eachblog_logo.jpg" width="300px">
</div>
    

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
    
    
<h1>プログラミングに役立つ掲示板</h1>
    
<div class="main-box">
    <div class="leftside">
        
    
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
            <textarea rows="7" cols="35" name="comments"></textarea>
          </div>

          <div>
            <input type="submit" class="submit" value="送信する">    
          </div>

        </form>

        <h3>タイトル</h3>
        <p>記事の中身、記事の中身、記事の中身・・・</p>
        
        <h3>タイトル</h3>
        <p>記事の中身、記事の中身、記事の中身・・・</p>
    </div>
    
    

    
    
    
    <div class="rightside">
        <h3>人気の記事</h3>
        <ul>
            <li>PHPオススメ本</li>
            <li>PHP　MyAdminの使い方</li>
            <li>いま人気のエディタTop5</li>
            <li>HTMLの基礎</li>
        </ul>
    
        <h3>オススメリンク</h3>
        <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Braketsのダウンロード</li>
        </ul>
        
        <h3>カテゴリ</h3>
        <ul>
            <li>HTML</li>
			<li>PHP</li>
			<li>MySQL</li>
			<li>JavaScript</li>
        </ul>
    
    </div>
    
</div>
    
    
    
    
    
<footer>
   copyright internous | 4each blog is the one which provides A to Z about programming.  
</footer>   
    
    
    
    
</body>

</html>