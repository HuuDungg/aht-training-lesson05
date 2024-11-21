<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNumbers = $_POST['phones'];

    $phoneArray = explode(",", $phoneNumbers);

    $viettel = [];
    $mobifone = [];
    $vinaphone = [];

    foreach ($phoneArray as $phone) {
        $phone = trim($phone);

        if (preg_match("/^09/", $phone)) {
            $viettel[] = $phone;
        } elseif (preg_match("/^02/", $phone)) {
            $vinaphone[] = $phone;
        } elseif (preg_match("/^05/", $phone)) {
            $mobifone[] = $phone;
        }
    }

    echo "<h3>Số điện thoại của Viettel:</h3>";
    echo !empty($viettel) ? implode("<br>", $viettel) : "Không có số điện thoại Viettel.";
    echo "<h3>Số điện thoại của Mobifone:</h3>";
    echo !empty($mobifone) ? implode("<br>", $mobifone) : "Không có số điện thoại Mobifone.";
    echo "<h3>Số điện thoại của Vinaphone:</h3>";
    echo !empty($vinaphone) ? implode("<br>", $vinaphone) : "Không có số điện thoại Vinaphone.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phân loại số điện thoại</title>
</head>

<body>
    <h2>Phân loại số điện thoại</h2>
    <form method="POST">
        <textarea name="phones" rows="4" cols="50" placeholder="Nhập số điện thoại cách nhau bởi dấu phẩy..."></textarea><br><br>
        <input type="submit" value="Phân loại">
    </form>
</body>

</html>