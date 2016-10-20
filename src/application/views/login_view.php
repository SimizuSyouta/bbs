<html>
  <head>
   <mata http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
   <title>ログイン画面</title>

    <body>
      <header>
        <a href="login/account">新規アカウント作成</a>
      </header>
    <img src="img/12986.jpg" width="100%" height="100%"
    style="position:absolute; top:0px; left:0px; z-index:1;">
    <div style="position:absolute; top:10px; left:10px; z-index:2">


    <font size="7"><b>Free Space</font></b>
    <form method="post" action="login/check">
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
       <input type="submit" value="ログイン">
      </form>

    <form method="post" action="login/account">
      <font size = 7>New account</font>
      <br>
      <input type="submit" value="アカウント作成">

    </form>

    </body>
</html>
