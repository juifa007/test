<?php
echo "if else<br>";
$x = false;

$tmp = 100;
$x = ( $tmp < 10 ); // false

$tmp = "Ray";
$x = ( $tmp == "Ray" ); // true  ==等價判斷

if( $x )
{
    echo "true<br>";
    myFunc4();
    myFunc3();
}
else
{
    echo "false<br>";
    myFunc();
} //只有一行不需要使用 {} 大括號

echo "static 變數<br>";

function myFunc4(){
    static $x = 100;
    $x = $x + 1;
    echo $x."<br>";
}

myFunc4();
myFunc4();

echo "<br>";
echo "<br>";
echo "global 變數<br>";
$x = 100; // 全域變數
$z = 300;

// 命名
function myFunc3(){  //block
    global $x; // 經由 global 的宣告，下方的 $x 就會有作用到
    $y = 200; //區域變數
    echo "y = $y";
    echo "x = $x";
    echo "z = ".$GLOBALS['z'];
}
// 使用，↓若多寫幾行，就會多執行幾次
myFunc3();

echo "y = $y <br>";// 在function的{}中，未定義到 $x 與 $y，所以 $x 和 $y 沒有作用
echo "x = $x <br>";


echo "<br>";
echo "變數的作用範圍<br>";
$x = 100;

// 命名
function myFunc2(){  //block
    $y = 200;
    echo "y = $y";
    echo "x = $x"; // 在function的{}中，未定義到 $x，所以 $x 沒有作用
}
// 使用，↓若多寫幾行，就會多執行幾次
myFunc2();

echo "y = $y <br>";// 在function的{}中，未定義到 $x 與 $y，所以 $x 和 $y 沒有作用
echo "x = $x <br>";

// 命名
function myFunc(){
    echo "This is from function.";
}
// 使用，↓若多寫幾行，就會多執行幾次
myFunc();
?>