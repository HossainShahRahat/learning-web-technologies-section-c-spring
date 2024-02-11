<?php
$myArray = array(10, 20, 30, 40, 50); // replace with your array
$searchElement = 30; // replace with the element to be searched

foreach ($myArray as $element) {
    if ($element == $searchElement) {
        echo "Element found!";
        break;
    }
}
?>
