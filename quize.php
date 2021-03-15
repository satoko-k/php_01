<?php
// 結果を代入する変数
$result = false;


    $janken = array(
        'グー',
        'チョキ',
        'パー'
    );

    // エスケープ
    $player = htmlspecialchars($_POST['choice'], ENT_QUOTES,);

    // 相手の手をランダムで決定
    $com = $janken[array_rand($janken)];

    // 勝敗判定
    if ($player === 'グー' && $com === 'チョキ') {
        $result = '勝ち';
    } elseif ($player === 'グー' && $com === 'グー') {
        $result = 'あいこ';
    } elseif ($player === 'グー' && $com === 'パー') {
        $result = '負け';
    } elseif ($player === 'チョキ' && $com === 'グー') {
        $result = '負け';
    }
    // 以下、チョキとパーのコード省略...
// }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPでじゃんけんゲーム</title>
</head>
<body>
<p>選んでください。</p>

<form action="" method="post">
    <button type="submit" name="choice" value="グー">グー</button>
    <button type="submit" name="choice" value="チョキ">チョキ</button>
    <button type="submit" name="choice" value="パー">パー</button>
</form>

<?php if ($result) : ?>
    <p>結果</p>

    <p>
    あなた：<?php echo $player; ?><br>
    あいて：<?php echo $com; ?>
    </p>

    <p><?php echo $result; ?>です。</p>
<?php endif; ?>

</body>
</html>