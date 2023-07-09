<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}
$name = h($_POST["name"]); // POST通信のデータを受け取る
$mail = h($_POST["mail"]);
$q1 = h($_POST["q1"]);
$q2 = h($_POST["q2"]);
$q3 = h($_POST["q3"]);
$c = ",";

//文字作成(日付)
$str = date("Y-m-d H:i:s").$c.$name.$c.$mail.$c.$q1.$c.$q2.$c.$q3;

//File書き込み
$file = fopen("data/data.txt","a");	// ファイルを開く
fwrite($file, $str."\n");//ファイルに書き込みを開始
fclose($file);//ファイルを閉じる
?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>