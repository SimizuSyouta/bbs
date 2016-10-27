<html>
  <head>
    <mata http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Game</title>
  </head>
  <body>
    <header>
      <center>
          <font size="7">Free spase Game Room</font>
          <br>
          <br>
          <b>ゲーマーの皆さんようこそ！！！<p>好きなゲームについて語りましょう。</b></p>
          <br>
          <font size="4">
            <a href="<?php echo base_url().'job'; ?>">仕事</a>
            <a href="<?php echo base_url().'game'; ?>">ゲーム</a>
            <a href="<?php echo base_url().'sports'; ?>">スポーツ</a>
            <a href="<?php echo base_url().'music'; ?>">音楽</a>
            <a href="<?php echo base_url().'logout';?>">ログアウト</a>
          </font>
          </center>
    </header>
<hr>
        <body style="background-color: #f0ffff;">

    <form action="<?php echo base_url().'game/send'; ?>" method="post">

      <br>

      <font size="4">

        <b>ニックネーム:</b>
        <br>
        <input name="username" type="text" style="width:500px height:500px">
        <br>
        <br>

        コメント内容
        <br>
        <input name="comment" type="text">
        <br>
        </font>

      <br>
      <br>
      <input type="submit" value="投稿する">
</form>
<font size="4">
<?php
foreach(@(array)$gamedata as $key => $value):?>
  <?php echo  "<b>". "No."."</b>".$key ."<b>"."： Username ："."</b>".$value['username']."<br><br>".$value['comment']."<br><br>";?>
<?php endforeach;?>
</hr>
</form>
</font>

  </body>
</html>
