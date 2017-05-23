<?php
/**
 * Created by PhpStorm.
 * User: THUYET TIEN SINH
 * Date: 5/19/2017
 * Time: 3:28 PM
 */
//3. Tìm bội chung của nhỏ nhất của 2 số.

// dummy data
$a = 2;
$b = 3;

BTNN($a, $b);

function BTNN($a, $b){
    // nếu a > b thì gán a = b và b = a để vòng lặp for được thực hiện nhanh hơn
    if ($a > $b){
        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;
    }
    // ý tưởng từ việc bội chung dễ tìm nhất chính là tích của 2 số đó
    for ($i = 1; $i <= $a; $i++) {
        if(($b*$i) % $a == 0) {
            echo  "BTNN [ a($a), b($b) ] = ".$b*$i."<br />";
            break;
        }
    }
}
