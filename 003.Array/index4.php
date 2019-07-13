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
//cách khai bảo mảng kiểu 1

/**
 * áp dụng cho mảng chỉ số
 * mảng chí số sẽ tự tạo key khi truyền value của phần tử
 */

$cities = array("hà nội", "hải phòng", "nghệ an", "hà tĩnh");

//cách số 2
/**
 * Khai bảo key cho mảng
 */
$cities = array(0 => "hà nội", 1 => "thanh hoá", 2 => "nghệ an", 3 => "hà tĩnh", 4 => "hồ chí minh");
// cách số 3
$cities = array();
$cities[] = "hà nội";
$cities[] = "thanh hoá";
$cities[] = "nghệ an";
$cities[] = "hà tĩnh";
$cities[] = "hồ chí minh";
// cách số 4
$cities = array();
$cities[0] = "hà nội";
$cities[1] = "thanh hoá";
$cities[2] = "nghệ an";
$cities[3] = "hà tĩnh";
$cities[4] = "hồ chí minh";
?>
</body>
</html>


?>
</body>
</html>