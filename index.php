<?php
function decimalToBinary($decimal)
{
    // Khởi tạo Stack (sử dụng mảng)

    while ($decimal > 0) {
        $remainder = $decimal % 2;
        array_push($stack, $remainder);

        $decimal = floor($decimal / 2);
    }

    $binary = "";
    while (!empty($stack)) {
        $binary .= array_pop($stack);
    }

    return $binary;
}

$decimal = 111;
$binary = decimalToBinary($decimal);


echo "convert " . $decimal . " to binary is : " . $binary;
