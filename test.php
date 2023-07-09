<?php
echo "hello";
?>

<h1>今年は <?php echo 2023 ?> 年です</h1>

<?php echo "<h2>今年の抱負</h2>" ?>

<?php
$name = 'どんぶラッコ';
echo "私の名前は $name です";
echo "私の名前は{$name}です"; // ダブルクォーテーション(")じゃないと動きません
?>