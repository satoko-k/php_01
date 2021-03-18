<?php

//セッションの確認
session_start();

include("function.php");
loginCheck();
// echo $_SESSION["chk_ssid"];

// echo $_SESSION["u_name"] ;
// echo $_SESSION["life_flg"];




//POSTされてきた?値が存在するか確認する。なければquestionNumber=0(=第１問）にする。
if(isset($_POST['questionNumber'])){
  $questionNumber = $_POST['questionNumber'];
}else{
  $questionNumber= 0;
}
  // echo $questionNumber;

//POSTされてきた?値が存在するか確認する。なければ正解数correctAnswer=0にする。
if(isset($_POST['correctAnswer'])){
  $correctAnswer = $_POST['correctAnswer'];
}else{
  $correctAnswer= 0;
}
// echo $correctAnswer;

// 
// 問題の配列を作る部分
// 
$quiztitle01 = ["このお花の名前は何でしょう？","img/tulips.jpg"];
$quizChoice01 = ["チューリップ","ひまわり","たんぽぽ","ガーベラ"];

$quiztitle02 = ["このお花が咲く季節はなに？","img/sunflower.jpg"];
$quizChoice02 = ["夏","春","秋","冬"];

$quiztitle03 = ["これは何の実でしょう？","img/lily.jpg"];
$quizChoice03 = ["ユリ","バラ","桜","ヒアシンス"];

// 答えはquizChoiceの配列の一番最初0番目にする
$answer01 = $quizChoice01[0];
$answer02 = $quizChoice02[0];
$answer03 = $quizChoice03[0];

// 選択肢の並び順をシャッフルさせる
shuffle($quizChoice01);
shuffle($quizChoice02);
shuffle($quizChoice03);
//問題文と選択肢の配列を結合する
$quiz01 = array_merge($quiztitle01 ,$quizChoice01) ;
$quiz02 = array_merge($quiztitle02 ,$quizChoice02) ;
$quiz03 = array_merge($quiztitle03 ,$quizChoice03) ;
// print_r($quiz01);
// echo $answer;

$quizArray = [$quiz01,$quiz02,$quiz03];

// var_dump ($quizArray);


// 2次元配列にする
$quetionName = $quizArray[$questionNumber][0];
$quetionImage = $quizArray[$questionNumber][1];
$answerA = $quizArray[$questionNumber][2];
$answerB = $quizArray[$questionNumber][3];
$answerC = $quizArray[$questionNumber][4];
$answerD = $quizArray[$questionNumber][5];

// $quetionName = $quiz01[0];
// $quetionImage = $quiz01[1];
// $answerA = $quiz01[2];
// $answerB = $quiz01[3];
// $answerC = $quiz01[4];
// $answerD = $quiz01[5];


// 問題番号に合わせた「答え」の指定
$answerArray=[$answer01,$answer02,$answer03];
// var_dump ($answerArray);
$answer = $answerArray[$questionNumber];



// echo $quetionName;
// echo $quetionImage;
// echo $answerA;
// echo $answerB;
// echo $answerC;
// echo $answerD;
// echo $answer;

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
    <p class="loginPlace">こんにちは！<?php echo $_SESSION["u_name"] ;?>さん<a href="logout.php" class="btn_logout">ログアウト</a></p>
      <h1>めざせ!! お花博士クイズ</h1>
      <p>何問正解できるかな？</p>
    </header>

    <main>
      <div class="quesionArea">
        <p class="questionNumber">問題<?php echo $questionNumber+1; ?></p>
        <h2><?php echo $quetionName;?></h2>
        <img src="<?php echo $quetionImage;?>" alt="" />
      </div>
      <p>答えを下から１つ選んでね。</p>
      <form method="post" action="answer.php">
        <input
          type="radio"
          id="choice01"
          class="radio_input"
          name="choice"
          value="<?php echo $answerA;?>"
        /><label class="radio_label" for="choice01"><?php echo $answerA;?></label>
        <input
          type="radio"
          id="choice02"
          class="radio_input"
          name="choice"
          value="<?php echo $answerB;?>"
        /><label class="radio_label" for="choice02"><?php echo $answerB;?></label>
        <input
          type="radio"
          id="choice03"
          class="radio_input"
          name="choice"
          value="<?php echo $answerC;?>"
        /><label class="radio_label" for="choice03"><?php echo $answerC;?></label>
        <input
          type="radio"
          id="choice04"
          class="radio_input"
          name="choice"
          value="<?php echo $answerD;?>"
        /><label class="radio_label" for="choice04"><?php echo $answerD;?></label><br>
      
        <!--こっそり送る部分  -->
        <input type="hidden" name="answer" value="<?php echo $answer ?>">
        <input type="hidden" name="quetionName" value=<?php echo $quetionName;?>>
        <input type="hidden" name="quetionImage" value=<?php echo $quetionImage;?>>
        <input type="hidden" name="questionNumber" value=<?php echo $questionNumber;?>>
        <input type="hidden" name="correctAnswer" value=<?php echo $correctAnswer;?>>
        <p><input id="send" type="submit" value="これで決定" /></p>
      </form>


        
    </main>

    <footer></footer>
  </body>
</html>
