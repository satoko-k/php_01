    <?php 

        session_start();

        include("function.php");
        loginCheck();
        // echo $_SESSION["chk_ssid"];

        // echo $_SESSION["u_name"] ;
        // echo $_SESSION["life_flg"];

        $correctAnswer = $_POST['correctAnswer']; 
        // echo $correctAnswer;

        if ($correctAnswer == 3){
            $rank ="お花博士レベル";
        }elseif($correctAnswer == 2) {
            $rank ="上級レベル";
        }elseif($correctAnswer == 1){
            $rank="中級レベル";
        }else {
            $rank="見習いレベル";
        }
        // echo $rank;

     ?>




<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>花クイズ完了画面</title>
    <link rel="stylesheet" href="css/completestyle.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
    
  </head>
  <body>
    <div class="wrapper">
      <div class="start ribbon">
        <p>結果発表</p>
      </div>
    <header>
    <p class="loginPlace">こんにちは！<?php echo $_SESSION["u_name"] ;?>さん<a href="logout.php" class="btn_logout">ログアウト</a></p>
      <h1>めざせ!! お花博士クイズ</h1>

    </header>

    <main>
    <div class="ribbon">
    <h2>結果発表</h2>
    </div>
    <div class="result">
    <p>正解数は・・・</p>
    <p>3問中・・<span class="correctRate"><?php echo $correctAnswer;?>問！！</span></p>
    <p>あなたは<span class="rank"><?php echo $rank;?></span>です。</p>
      </div>
      
        <!--こっそり送る部分  -->

    <form method="POST" class="form" action="quize.php">
      <?php 
      $questionNumber = 0;
      // echo $questionNumber;
      $correctAnswer = 0;
      // echo $questionNumber;
      
      ?>
      <input type="hidden" name="questionNumber" value=<?php echo $questionNumber;?>>
      <input type="hidden" name="correctAnswer" value=<?php echo $correctAnswer;?>>
        <p><input id="send" type="submit" value="もう一回挑戦する" /></p>
      </form>


        
    </main>

    <footer></footer>
    </div>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">
    $(function() {
      setTimeout(function(){
        $('.start p').fadeIn(1500);
      },500); //0.5秒後にロゴをフェードイン!フェードイン時間は１.5秒
      setTimeout(function(){
        $('.start').fadeOut(500);
      },2500); //2.5秒後にロゴ含め真っ白背景をフェードアウト！
    });
</script>

  
  </body>
</html>
