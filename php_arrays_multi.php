<?php
$cars_origin = array
(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

$cars = [
    ["Volvo",22,18],        // 0
    ["BMW",15,13],        // 1
    ["Saab",5,2],           // 2
    ["Land Rover",17,15]   // 3
];

echo $cars[0][0].": 庫存：".$cars[0][1].", 銷量：".$cars[0][2].".<br>";
echo $cars[1][0].": 庫存：".$cars[1][1].", 銷量：".$cars[1][2].".<br>";
echo $cars[2][0].": 庫存：".$cars[2][1].", 銷量：".$cars[2][2].".<br>";
echo $cars[3][0].": 庫存：".$cars[3][1].", 銷量：".$cars[3][2].".<br>";
?>

<?php
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>
