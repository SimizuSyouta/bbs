<html>
  <head>
  <mata http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>トップ画面</title>

    <body>
      <img src="http://localhost/img/12986.jpg" width="100%" height="100%"
      style="position:absolute; top:0px; left:0px; z-index:1;">
      <div style="position:absolute; top:10px; left:10px; z-index:2">
        <font size="5"color="#000000"><b>
            Welcome to Free Space!!
            <?php
            print $_POST['username'];
            print '様';
            ?>
          </b>
        </font>
      <br>
      <br>
        <font size="7" color="#0000bb">好きなカテゴリを選択してください。</font>
      <br>
      <br>

      <p><a href="job">
      <img src="../img/job.jpg"alt="サンプル画像">
      </a>
      <p><a href="game">
      <img src="../img/game.jpg"alt="サンプル画像">
    </a>
      <p><a href="sports">
    <img src="../img/supo.jpg"alt="サンプル画像">
  </a>
  <p><a href="music">
  <img src="../img/music.jpg"alt="サンプル画像">
  </a>



    </body>
</html>
