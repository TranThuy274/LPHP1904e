<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<pre>
    Lấy giá trị của từng ô input post đi từ $_POST
    Vì $_POST là 1 mảng
    nên muốn lấy giá trị của từng phần tử
    truy cập $_POST['key']
</pre>

<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$username = $_POST["username"];
$password = $_POST["password"];

echo "<br> Username: " . $username;
echo "<br> Password: " . $password;
?>

<div class="container">
    <div class="row">
        <form name="demo" action="" method="post">
            <p>
                Username : <input name="username" type="text" value="">
            </p>

            <p>
                Password : <input name="password" type="password" value="">
            </p>

            <p>
                <input type="submit" name="submit" value="Login">
            </p>
        </form>
    </div>
</div>
</body>
</html>