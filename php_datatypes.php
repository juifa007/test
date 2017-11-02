<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>

<?php
echo "<h1>hello world !!</h1>";
?>

<?php
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 負數
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六進位數
var_dump($x);
echo "<br>";
$x = 047; // 八進位數
var_dump($x);
?>

<?php
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
?>

<?php
$carsBrands = ["Volvo","BMW","SAAB"];
$carsBrands = ["name" => "JuiFa", "gender" => "M", "area" => "新竹"];
var_dump( $carsBrands );

echo "陣列的宣告，取用，修改，出出結果";
echo $carsBrands = ["name"];
echo "<br>";
$carsBrands["name"] = "Jack";
echo $carsBrands["name"];
echo "<br>";

?>

<?php
$x="Hello world!";
var_dump($x);
$x = "";
var_dump($x);
$x = null;
var_dump($x);
echo "<br>";
?>


</body>
</html>