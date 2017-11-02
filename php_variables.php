<?php

function myTest2() {
    static $x = 0;
    echo $x."<br>";
    $x++;  // 等於 $x =  $x + 1 ，指 $x + 1 先執行後，再指定給 $x
}

myTest2(); // x = 1
myTest2(); // x = 2
myTest2(); // x = 3

?>


1. 宣告1個變數x，給他一個值，印到標準網頁格式。<br>
2. 宣告2個函式，內部宣告2個變數 x，y ，印到標準網頁格式中。<br>
3. 執行2個函式。<br>
4. 在函式中，加入 html 語法，應用在變數上面。<br>
5. 在函式使用 global 宣告，或 GLOBALS[] 取得全域變數，印出全域變數，修改全域變數。<br>
6. 執行完函式後，印出已經被修改的全域變數。<br>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // global scope

function myTest() {
    $y = 10; // local scope\
    global $x; // 指要用到全域的 $x = 5
    $x = 3;
    echo "<p>在 myTest() 函數內部測試變量：</p>";
    echo "變量 x 是：$x";
    echo "<br>";
    echo "變量 y 是：$y";
    echo "<br>";
}

function myFunc (){
    echo "<p>在 myFunc() 函數內部測試變量：</p>";
    $y = 100; // 定義了 $y  ，但是只在這個區塊，與上方的 $y 無關
    echo "變量 x 是：".$GLOBALS["x"];
    echo "<br>";
    $GLOBALS["x"] = 5;
    echo "變量 y 是：$y";
    echo "<br>";
}

myTest();
myFunc();

echo "<p>在函數外部測試變量：</p>";
echo "變量量 x 是：$x";
echo "<br>";
echo "變量 y 是：$y";
echo "<br>";
?>

</body>
</html>




<?php
$x = 5;
$y = 6;

$z = $x + $y ;

echo "x = ".$x."<br>"."y = ".$y."<br>"."z = x + y =".$z."<br>";

echo "x = ".$x."<br>";
echo "y = ".$y."<br>";
echo "z = x + y =".$z."<br>";

echo "x = $x<br>";
echo "y = $y<br>";
echo "z = x + y = $z";
?>

