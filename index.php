<?php
$foods = array("apple", "orange", "banana", "coconut");

$foods[0] = "pineapple";

array_push($foods, "kiwi");
array_pop($foods);

foreach ($foods as $food) {
    echo $food . "<br>";
}

echo "Number of foods: " . count($foods);
