<?php
/**
 * Created by PhpStorm.
 * User: THUYET TIEN SINH
 * Date: 5/22/2017
 * Time: 11:00 AM
 */

//dummy data
$a = -4;
$b = 12;

// in ra kết quả
echo UTLN($a, $b);

// kiểm tra ước chung lớn nhất của 2 số
function UTLN($a, $b) {
    $a = abs($a);
    $b = abs($b);
    if ($a === 0 || $b === 0)
        return $a + $b;
    while ($a != $b)
    {
        if ($a > $b)
            $a = $a - $b;
        else
            $b = $b - $a;
    }
    return $a;
}

