<?php
$x = 1;

while( $x <= 5) {
    $x++;
    echo "這個數字是：$x <br>";

    if( $x == 3)
    {
        echo "哈囉！你來啦！！<br>";
        continue;
//        break;
    }
    echo "這是沒有 continue  的.......<br>";
//        break;
}
echo "<br>";
?>

<?php
$x=1;

do {
    echo "這個數字是：$x <br>";
    $x++;
} while ($x<=5);
echo "<br>";
?>
