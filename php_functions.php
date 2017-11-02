<?php
function writeMsg(){
    echo "Hello World!!";
}

writeMsg(); // 調用函數
echo "<br>";
?>

<?php
function familyName( $fname ) {
    echo "$fname Zhang.<br>";
}

familyName("Li");
familyName("Hong");
familyName("Tao");
familyName("Xiao Mei");
familyName("Jian");
echo "<br>";
?>

<?php
function familyName2( $fname, $year ) {
    echo "$fname Zhang. Born in $year <br>";
}

familyName2("Li","1975");
familyName2("Hong","1978");
familyName2("Tao","1983");
echo "<br>";
?>

<?php
function setHeight( $minheight = 50 ) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // 将使用默认值 50
setHeight(135);
setHeight(80);
echo "<br>";
?>

<?php
function sum ( $x, $y ) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
echo "<br>";
?>

<?php
function sum2( $x,$y ) {
    $z = $x - $y;
    return $z;
}

echo " 10 - 5 = " . sum2 ( 10,5 ) . "<br>";
echo " 13 - 7 = " . sum2 ( 13,7 ) . "<br>";
echo " 4 - 2 = " . sum2 ( 4,2 );
echo "<br>";
?>