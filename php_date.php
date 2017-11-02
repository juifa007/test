<?php
echo "今天是 " . date("Y/m/d") . "<br>";
echo "今天是 " . date("Y.m.d") . "<br>";
echo "今天是 " . date("Y-m-d") . "<br>";
echo "今天是 " . date("l");
echo "<br>";
?>

© 2010-<?php echo date("Y")."<br>"?>


<?php
echo "現在時間是 " . date("h:i:sa");
echo "<br>";
?>

<?php
date_default_timezone_set("Asia/Shanghai");
echo "當前時間是 " . date("h:i:sa");
echo "<br>";
?>

<?php
$d=mktime(9, 12, 31, 6, 10, 2015);
echo "創建日期是 " . date("Y-m-d h:i:sa", $d);
echo "<br>";
?>

<?php
$d=strtotime("10:38pm April 15 2015");
echo "創建日期是 " . date("Y-m-d h:i:sa", $d);
echo "<br>";
?>

<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks",$startdate);

while ($startdate < $enddate) {
    echo date("M d", $startdate),"<br>";
    $startdate = strtotime("+1 week", $startdate);
}
?>

<?php
$d1=strtotime("December 31");
$d2=ceil(($d1-time())/60/60/24);
echo "距離十二月三十一日還有：" . $d2 ." 天。";
?>

