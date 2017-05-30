<?php
/**
 * Created by PhpStorm.
 * User: THUYET TIEN SINH
 * Date: 5/22/2017
 * Time: 11:27 AM
 */
$n = 5;
$star = '*';

# sử dụng hàm str_repeat()
for ($i = 1; $i <= $n; $i++) {
   echo str_repeat($star, $i)."<br />";
}

# sử dụng for lồng nhau
// for ($i = 1; $i <= $n; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo $star;
//     }
//     echo "<br />";
// }