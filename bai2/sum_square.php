<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <form action="" method="post">
        <label for="limit">Nhập n: </label>
        <input type="text" name="limit" id="limit">
        <input type="submit" name="submit" value="Submit">
    </form>
</div>


<?php

if (isset($_POST['limit'])) {
    $a = $_POST['limit'];
    echo sum_square($a);
}

function sum_square($a) {
    if ($a == 1) {
        $result = 1;
    } else {
        $result = pow($a, 2) + sum_square($a-1);
    }
    return $result;
}
?>
</body>
</html>