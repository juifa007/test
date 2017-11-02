<?php
for ($x = 0; $x <= 10; $x++) {
    echo "數字是：$x <br>";
}
echo "<br>";
?>

<?php
$colors = [ "red", "green", "blue", "yellow" ];
var_dump($colors);
$colors = [ "red", "green", "blue", "yellow" ];
var_dump($colors);

foreach ($colors as $key => $value) {
    echo "$key:$value <br>";
}
echo "<br>";
?>
