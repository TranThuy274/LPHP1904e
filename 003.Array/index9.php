<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<?php
$array1 = array("hà nội", "thanh hóa", "nghệ an", "hà tĩnh", "hồ chí minh");
echo "<pre>";
print_r($array1);
echo "</pre>";

/**
 * Cú pháp rút gọn
 */
foreach ($array1 as $value) {
    echo "<br>" . $value;
}
/**
 * cú pháp lặp mảng đầy đủ
 */
foreach ($array1 as $key => $value) {
    echo "<br>" . $key . " - " . $value;
}

/**
 * cú pháp ít dùng
 */
foreach ($array1 as $key => $value) {
    echo "<br>" . $key . " - " . $array1[key];
}

?>
</body>
</html>