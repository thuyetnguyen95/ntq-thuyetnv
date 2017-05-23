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
<h2>In số nguyên tố</h2>
<form action="" method="post">
    <label for="limit">Nhập n: </label>
    <input type="text" name="limit" id="limit">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
	
	if (isset($_POST['limit'])) {
    $a = $_POST['limit'];
    echo "----------------<br />";
    for ($i=2; $i < $a ; $i++) {
        if (checkPrime($i)) {
            echo $i."<br />";
        }
    }
}

function checkPrime($a) {
    $b = sqrt($a);
    $c = (int)$b;
    if ($a == 1) {
        return true;
    } else {
        for ($i=2; $i <= $c; $i++) {
            if ($a % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
?>
</body>
</html>