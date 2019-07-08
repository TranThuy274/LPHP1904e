<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<pre>
    Mảng đa chiều là mảng mà phần tử trong mảng là 1 mảng
    Mảng đa chiều là mảng lồng mảng


</pre>

<?php
$array3 = array();
$array3["china"] = array("name" => "trung quốc", "city" => array("bắc kinh", "thượng hải", "thành đô"));
$array3["korea"] = array("name" => "hàn quốc", "city" => array("seoul"));
$array3["japan"] = array("name" => "nhật bản", "city" => array("tokyo", "osaka"));
$array3["vietnam"] = array("name" => "việt nam", "city" => array("hà nội", "hồ chí minh"));

echo "<pre>";
print_r($array3);
echo "</pre>";
?>

</body>
</html>