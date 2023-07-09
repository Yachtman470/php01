<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}
$name = h($_POST["name"]);
$mail = h($_POST["mail"]);
// include('funcs.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
<li> お名前：<?= $name ?> </li>
<li> Mail：<?= $mail ?> </li>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>