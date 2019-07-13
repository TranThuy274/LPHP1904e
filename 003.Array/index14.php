<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    Loop mảng đa chiều
    Yêu cầu : in được ra tên của các thành phố
</pre>

<ul>
    <li>Trung quốc</li>
    <li>Bắc kinh</li>
    <li>Thâm quyết</li>
    <li>Thành đô</li>
    <li>Hàn quốc</li>
    <li>Seun</li>
</ul>

<?php
$array3 = array();
$array3["china"] = array("name" => "trung quốc", "city" => array("bắc kinh", "thâm quyến", "thành đô"));
$array3["korea"] = array("name" => "hàn quốc", "city" => array("seun"));
$array3["japan"] = array("name" => "nhật bản", "city" => array("tokyo", "kyoto"));
$array3["vn"] = array("name" => "việt nam", "city" => array("hà nội", "hồ chí minh"));
echo "<pre>";
print_r($array3);
echo "</pre>";

foreach ($array3 as $keyCountry => $country) {
    foreach ($country as $keyCities => $cities) {
        ?>
        <b>
            <?php if ($keyCities == "name") {
                echo "<br>" . $cities;
            }
            ?>
        </b>

        <?php
        if ($keyCities == "city") {
            ?>
            <ul>
                <?php foreach ($cities as $keyCity => $city) {
                    ?>
                    <li>
                        <?php echo "<br>" . $city; ?>
                    </li>
                <?php }
                ?>
            </ul>
        <?php }
        ?>

    <?php }
    ?>
    <?php
}
?>
</body>
</html>