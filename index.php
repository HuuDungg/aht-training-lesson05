<?php
function countOccurrences($numbers, $value)
{
    $count = 0;

    foreach ($numbers as $number) {
        if ($number == $value) {
            $count++;
        }
    }

    return $count;
}

$numbers = [1, 2, 3, 4, 5, 2, 3, 2, 6, 2];
$value = 2;

echo "Số lần xuất hiện của $value trong mảng là: " . countOccurrences($numbers, $value);
