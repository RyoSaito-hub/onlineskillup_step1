<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      if(isset($_GET["comment"])){
        //エスケープしてから表示
        $comment = htmlspecialchars($_GET["comment"]);
        print("あなたのコメントは「 ${comment} 」です。");
      } else {
    ?>
        <p>コメントしてください。</p>
        <form method="GET" action="index.php">
          <input name="comment" />
          <input type="submit" value="送信" />
          <input type="submit" value="送信" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>