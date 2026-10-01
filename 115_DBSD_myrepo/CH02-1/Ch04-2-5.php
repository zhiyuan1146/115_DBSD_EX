# SID: C113181116<BR>
# Name: zhiyuan <BR>
EX03
<HR>
<?php
$name = "陳會安";  // 指定變數值（已移除原先開頭多餘的斜線）
$username1 = "陳允傑";
$username2 = "江小魚";

// echo()顯示內容
echo ("PHP的echo()使用<br/>");
echo "PHP的echo()使用<br/>";
echo $username1, $username2, "<br/>"; // 建議加上 <br/> 避免文字連在一起
echo "Hi! " . $name . "<br/>";
echo "Hi! $name  $username1  $username2<br/>";
echo ("Hi! " . $name . " " . $username1 . "<br/>");
echo ("Hi! $name<br/>");

// print()顯示內容
print ("PHP的print()使用<br/>");
print "PHP的print()使用<br/>";
print "Hi! " . $name . "<br/>";
print "Hi! $name $username1 $username2<br/>";
print ("Hi! " . $name . " " . $username1 . "<br/>");
print ("Hi! $name<br/>");
?>