<html>
  <head>
    <mata http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>トーク画面</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/style.css'; ?>">
  </head>
  <body>
    <div style="position:absolute; top:10px; left:10px; z-index:2">
      <img src="<?php echo base_url().'img/12986.jpg'; ?>" width="100%" height="100%"
        style="position:absolute; top:0px; left:0px; z-index:1;">
    </div>


    <font size="7"><b>Create new account</font></b>
    <form action="<?php echo base_url().'talk'; ?>" method="post">
      <br>



      <font size="4">
        <b>User ID:</b>
        <input name="username" type="text" style="width:100px">
        <br>
        <br>
        <br>
        <b>Passwd:</b>
        <input name="comment" type="text" style="width:100px">
        </font>
      <br>
      <br>
      <input type="submit" value="投稿する">

    </form>

  </body>
</html>
