<html>
  <head>
    <mata http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>スポーツルーム</title>
  </head>
  <body>
    <header>
<font size="7">Free spase</font>
<br>
<br>
<font size="4">
  <a href="<?php echo base_url().'job'; ?>">仕事</a>
  <a href="<?php echo base_url().'game'; ?>">ゲーム</a>
  <a href="<?php echo base_url().'sports'; ?>">スポーツ</a>
  <a href="<?php echo base_url().'music'; ?>">音楽</a>

</font>
</header>
<hr>
        <body style="background-color: #f0ffff;">
    <font size="7"><b>スポーツについて語り合いましょう</font></b>
    <br>
    <p><b>ここは働いていて感じた不満や出来事を書く部屋です。</b></p>
    <form action="<?php echo base_url().'sports/send'; ?>" method="post">

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
foreach(@(array)$sportsdata as $key => $value):?>
<?php echo  "<b>". "No."."</b>".$key."<b>"."： Username ："."</b>".$value['username']."<br><br>".$value['comment']."<br><br>";?>
<?php endforeach;?>
</hr>
</font>

  </body>
</html>
