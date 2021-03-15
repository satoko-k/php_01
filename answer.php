    <?php
        $choice = $_POST['choice']; 
        $answer = $_POST['answer']; 
        $questionNumber = $_POST['questionNumber']; 
        $quetionName = $_POST['quetionName']; 
        $quetionImage = $_POST['quetionImage']; 


        echo $choice;
        echo $answer;
        echo $questionNumber;
        echo $quetionName;
        echo $quetionImage;

        if($choice == $answer){
        $result = '<span style="color: red">正解！</span>';
        }else{
            $result ='<span style="color: blue">ざんねん！不正解</span>'; 
        }
    ?>


<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>花クイズ</title>
    <link rel="stylesheet" href="css/answerstyle.css" />
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
        <div class="answerArea">
            <img src="<?php echo $quetionImage;?>" alt="" />
            <div>
            <p class="result"><?php echo $result; ?></p>
            <p class="answer">答えは、<span class="answerBold"><?php echo $answer; ?></span>です。</p>
            </div>
        </div>
      </div>


      <form method="POST" class="form" action="index.php">
     <!-- 問題番号に+1させる questionNumberが1の時は問題2　2の時は問題3-->
      <?php  
       $questionNumber=+1;
      echo $questionNumber;?>
      <input type="" name="questionNumber" value=<?php echo $questionNumber;?>>
      <p><input id="send" type="submit" value="次の問題へすすむ" /></p>
      </form>
      
<!--  
  


      
    </main>

    <footer></footer>
  </body>
</html>
