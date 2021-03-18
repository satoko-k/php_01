


<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/loginstyle.css" />
    <title>メンバー登録</title>
  </head>
  <body>

    <header>
    <h1>めざせ!! お花博士クイズ</h1>
    </header>
    <div class="wrapper">
  <main>
      <form method="post" action="insert.php">
        <div class="form">
      
            <h2>メンバー登録</h2>
            <p><label for="">お名前：<input type="text" name="u_name" required/></label></p>
            <p><label for="">ログインID:<input type="text" name="u_id" required /></label></p>
            <p><label for="">ログインPW:<input type="text" name="u_pw" required /></label></p>
            <input type="submit" value="送信" />
         
        </div>
        <div>
          <a class="navbar-brand" href="login.php">ログイン画面へ戻る</a>
        </div>
      </form>
    </main>
   </div>
  </body>
</html>
