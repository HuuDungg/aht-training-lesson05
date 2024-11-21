<?php
function decimalToBinary($decimal)
{
    // dùng mảng duyệt liên tục để chia lấy dư, lưu vào stack rồi dùng array_pop lấy phần tử đầu trong stack để đảo ngược stach vưua lưu
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
