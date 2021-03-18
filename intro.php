<?php
////////////////////////
//セッションの確認
////////////////////
session_start();

include("function.php");
loginCheck();
//  if( !isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id()){
//     echo "LOGIN Error!";
//     exit();
//  }else{
//     //  認証できてる時　セッションリジェネレイト
//     session_regenerate_id(true);
//     $_SESSION["chk_ssid"] = session_id();
//     // echo $_SESSION["chk_ssid"];
//  }
// echo $_SESSION["chk_ssid"];

// echo $_SESSION["u_name"] ;
// echo $_SESSION["life_flg"];



?>


<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>花クイズ</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    
  </head>
  <body>
    <header>
    <p class="loginPlace"><a href="logout.php" class="btn_logout">ログアウト</a></p>
      <h1>めざせ!! お花博士クイズ</h1>

    </header>

    <main>
      
        <h2>Wellcome！</h2>
     
        <div>
            <p>こんにちは！　<?php echo $_SESSION["u_name"] ;?>さん</p>
            <p>これから花に関するクイズをだすよ！<br>全問正解するれば花博士に認定です！</p>
        </div>
        <p><a href="quize.php" class="btn">クイズに挑戦する</a></p>

        


    </main>

    <footer></footer>
  </body>
</html>
