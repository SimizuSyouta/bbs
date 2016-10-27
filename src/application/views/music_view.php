<html>
  <head>
    <mata http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Musicroom</title>
  </head>
  <body>
    <header>
      <center>
<font size="7">Free spase Music Room</font>
<br>
<br>
<b>音楽好きの皆さんようこそ！！！<p>好きな音楽やアーティストについて語りあいましょう。</b></p>
<br>
<font size="4">
<a href="<?php echo base_url().'job'; ?>">仕事</a>
<a href="<?php echo base_url().'game'; ?>">ゲーム</a>
<a href="<?php echo base_url().'sports'; ?>">スポーツ</a>
<a href="<?php echo base_url().'music'; ?>">音楽</a>
<a href="<?php echo base_url().'logout';  ?>">ログアウト</a>
</font>
</center>
</header>
<hr>
        <body style="background-color: #f0ffff;">
    <br>

    <form action="<?php echo base_url().'music/send'; ?>" method="post">


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
foreach(@(array)$musicdata as $key => $value):?>
<?php echo  "<b>". "No."."</b>".$key."<b>"."： Username ："."</b>".$value['username']."<br><br>".$value['comment']."<br><br>";?>
<?php endforeach;?>
</hr>
</font>

  </body>
</html>
