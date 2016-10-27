<html>
  <head>
    <mata http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ログイン画面</title>
  </head>
  <body>
    <img src="http://localhost/img/12986.jpg" width="100%" height="100%"
    style="position:absolute; top:0px; left:0px; z-index:1;">
    <div style="position:absolute; top:10px; left:10px; z-index:2">

    <font size="7"><b>Create new account</font></b>
    <form action="<?php echo base_url().'login/account';
    ?>" method="post">
      <br>



      <font size="4">
        <b>User ID:</b>
        <input name="username" type="text" style="width:100px">
        <br>
        <br>
        <br>
        <b>Passwd:</b>

        <input name="password" type="password" style="width:100px">
        </font>
      <br>
      <br>
      <input type="submit" value="登録する">

    </form>

  </body>
</html>
