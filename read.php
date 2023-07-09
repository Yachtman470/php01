<?php
$file = fopen('data/data.txt', 'r'); // ファイルを開く
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table width="80%" border="1">
 <tr>
  <th scope="col">日付</th>
  <th scope="col">氏名</th>
  <th scope="col">メールアドレス</th>
  <th scope="col">質問1</th>
  <th scope="col">質問2</th>
  <th scope="col">質問3</th>
 </tr>
 <?php
 // ファイル内容を1行ずつ読み込んで出力
while ($line = fgets($file)) {
    if (trim($line) != null){
        list($date,$name,$mail,$q1,$q2,$q3) = explode(",",$line);
        print "<tr>\n";
        print "<td>$date</td><td>$name</td><td>$mail</td><td>$q1</td><td>$q2</td><td>$q3</td>\n";
        print "</tr>\n";
    }
    // echo nl2br($str); // nl2br() ... 改行文字を追加
}
?>
 </table>
</body>
</html>

<?php
fclose($file); // ファイルを閉じる
?>