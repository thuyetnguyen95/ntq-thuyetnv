<?php
/**
 * Created by PhpStorm.
 * User: THUYET TIEN SINH
 * Date: 5/22/2017
 * Time: 11:25 AM
 */

//dummy data
$arr = array(49,70,-35);
$utln = $arr[0];

//
for ($i = 0; $i < count($arr); $i++){
    $utln = UTLN($utln, $arr[$i]);
}

// in ra kết quả
echo $utln;

// hàm tìm ucln của 2 số
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
