<?php
//値が存在するか確認する。なければquestionNumber=0(=第１問）にする。
if(isset($_POST['questionNumber'])){
  $questionNumber = $_POST['questionNumber'];
}else{
  $questionNumber= 0;
}
  echo $questionNumber;

//値が存在するか確認する。なければ正解数correctAnswer=0にする。
if(isset($_POST['correctAnswer'])){
  $correctAnswer = $_POST['correctAnswer'];
}else{
  $correctAnswer= 0;
}
echo $correctAnswer;

// 
// 問題の配列を作る部分
// 
$quiztitle01 = ["このお花の名前は何でしょう？","img/tulips.jpg"];
$quizChoice01 = ["チューリップ","ひまわり","たんぽぽ","ガーベラ"];

$quiztitle02 = ["このお花が咲く季節はなに？","img/sunflower.jpg"];
$quizChoice02 = ["夏","春","秋","冬"];

$quiztitle03 = ["これは何の実でしょう？","img/lily.jpg"];
$quizChoice03 = ["ユリ","バラ","桜","ヒアシンス"];

// 答えはquizChoiceの配列の一番最初0番目にしてます
$answer = $quizChoice01[0];
// 選択肢の並び順をシャッフルさせる
shuffle($quizChoice01);
//問題文と選択肢の配列を結合する
$quiz01 = array_merge($quiztitle01 ,$quizChoice01) ;
// print_r($quiz01);
// echo $answer;

$quetionName = $quiz01[0];
$quetionImage = $quiz01[1];
$answerA = $quiz01[2];
$answerB = $quiz01[3];
$answerC = $quiz01[4];
$answerD = $quiz01[5];

// echo $quetionName;
// echo $quetionImage;
// echo $answerA;
// echo $answerB;
// echo $answerC;

?>


<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>花クイズ</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <h1>めざせ！お花博士！お花クイズ</h1>
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
        <input type="" name="answer" value="<?php echo $answer ?>">
        <input type="" name="quetionName" value=<?php echo $quetionName;?>>
        <input type="" name="quetionImage" value=<?php echo $quetionImage;?>>
        <input type="" name="questionNumber" value=<?php echo $questionNumber;?>>
        <input type="" name="correctAnswer" value=<?php echo $correctAnswer;?>>
        <p><input id="send" type="submit" value="これで決定" /></p>
      </form>


        
    </main>

    <footer></footer>
  </body>
</html>
