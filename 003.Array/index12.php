<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<pre>
    Các hàm xử lý mảng trong php
</pre>

<?php
$array1 = array(0, 1, 2);

/**
 * Đếm số phần tử của mảng
 */
echo "<br> hàm count: " . count($array1);
/**
 * Kiểm tra 1  biến có phải là 1 mảng hay k
 */
echo "<br> hàm is_array";
var_dump(is_array($array1));


/**
 * Kiểm tra xem 1 mảng có rỗng không
 * empty($array1) trả về true nếu mảng rỗng và false nếu ngược lại
 * !empty($array1) trả về true nếu mảng có dữ liệu và false nếu mảng không có dữ liệu
 *
 */

echo "<br>";
var_dump(empty($array1));
?>
</body>
</html>