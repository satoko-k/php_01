    <?php
        $correctAnswer = $_POST['correctAnswer']; 
        echo $correctAnswer;

        if ($correctAnswer == 3){
            $rank ="お花博士レベル";
        }elseif($correctAnswer == 2) {
            $rank ="上級レベル";
        }elseif($correctAnswer == 1){
            $rank="中級レベル";
        }else {
            $rank="見習いレベル";
        }
        echo $rank;

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
    <header>
      <h1>めざせ！お花博士！お花クイズ</h1>
      <p></p>
    </header>

    <main>
    <h2>結果発表</h2>
    <p>正解数は・・・</p>
    <p>3問中・・<span class="correctRate"><?php echo $correctAnswer;?>問！！</span></p>
    <p>あなたは<span class="rank"><?php echo $rank;?></span>です。</p>
      
        <!--こっそり送る部分  -->

    <form method="POST" class="form" action="index.php">
      <?php 
      $questionNumber = 0;
      echo $questionNumber;
      $correctAnswer = 0;
      echo $questionNumber;
      
      ?>
      <input type="" name="questionNumber" value=<?php echo $questionNumber;?>>
      <input type="" name="correctAnswer" value=<?php echo $correctAnswer;?>>
        <p><input id="send" type="submit" value="もう一回挑戦する" /></p>
      </form>


        
    </main>

    <footer></footer>
  </body>
</html>
