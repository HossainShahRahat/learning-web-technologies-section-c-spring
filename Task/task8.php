<?php
$myArray = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F')
);

// Print Shapes
foreach ($myArray as $row) {
    foreach ($row as $element) {
        echo $element . " ";
    }
    echo "<br>";
}
?>
