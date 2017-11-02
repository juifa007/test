<?php
$x = 10;
$y = 6;
echo ($x + $y)."<br>"; // 输出 16
echo ($x - $y)."<br>"; // 输出 4
echo ($x * $y)."<br>"; // 输出 60
echo ($x / $y)."<br>"; // 输出 1.6666666666667
echo ($x % $y)."<br>"; // 输出 4
echo "<br>";
echo "<br>";
?>

<?php
$a = "Hello";
$b = $a . " world!";
echo $b; // 輸出 Hello world!
echo "<br>";

$x="Hello";
// $x = $x，" world ! ";
$x .= " world!";
echo $x; // 輸出 Hello world!
echo "<br>";
echo "<br>";
?>

<?php
$x=10;
echo ++$x; // 输出 11
echo "<br>";

$y=10;
echo $y++; // 输出 10
echo "<br>";

$z=5;
echo --$z; // 输出 4
echo "<br>";

$i=5;
echo $i--; // 输出 5
echo "<br>";
echo $i;
echo "<br>";

for( $i = 0; $i < 2; $i++)
{
    echo $i."<br>";
    echo "<a target = '_blank' href='http://tw.yahoo.com'>test<br></a>";
}
?>



<?php

$x = 2;
$y = 3;

if ($x != $y)
    echo "true";
else
    echo "false";
echo "<br>";

$x=100;
$y="100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";
?>

<?php

$x = false;
$y = false;

if ( !$x)
    echo "true";
else
    echo "false";
echo "<br>";
?>

<?php
$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";

?>
<?php
$array = ["BMW", "VOLVO", "BENZ"];
var_dump($array);
echo $array[2];

$x = ["a" => "red", "b" => "green"];
$y = ["c" => "blue", "d" => "yellow"];
echo $x["a"];

$z = $x + $y; // $x 与 $y 的联合
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);
echo "<br>";
?>