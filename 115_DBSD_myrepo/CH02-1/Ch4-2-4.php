# SID: C113181116<BR>
# Name: zhiyuan <BR>
EX02
<HR>
<?php
// 指定變數值
$name = "myName"; // 將字串 "myName" 賦值給變數 $name

// 動態變數名稱
$$name = "陳允東";  // 使用可變變數，將 "陳允東" 賦值給變數 $myName

// 取出動態變數的值
$username = $$name; // 將變數 $myName 的值賦值給 $username
$username1 = ${$name}; // 使用可變變數語法，將變數 $myName 的值賦值給 $username1

// 顯示變數內容
echo "變數\$name = $name<br/>"; // 輸出：變數$name = myName
echo "變數\$$name = $myName<br/>"; // 輸出：變數$myName = 陳允東
echo "變數\$$name = ${$name}<br/>"; // 輸出：變數$myName = 陳允東
echo "變數\$username = $username<br/>"; // 輸出：變數$username = 陳允東
echo "變數\$username1 = $username1<br/>"; // 輸出：變數$username1 = 陳允東
?>