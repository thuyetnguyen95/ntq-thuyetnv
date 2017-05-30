<?php
/**
 * Created by PhpStorm.
 * User: THUYET TIEN SINH
 * Date: 5/22/2017
 * Time: 9:54 AM
 */
//

//dummy data
$arr = array(8,9,21);
$btnn = $arr[0];

// sử dụng tính chất kết hợp của btnn để thực hiện tìm bội của mảng
for ($i = 0; $i < count($arr); $i++){
    $btnn = BTNN($btnn, $arr[$i]);
}
echo $btnn;

// hàm kiểm tra BTNN của 2 số a và b
function BTNN($a, $b){
    if ($a > $b){
        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;
    }
    for ($i = 1; $i <= $a; $i++) {
        if(($b*$i) % $a == 0) {
            return  $b*$i."<br />";
            break;
        }
    }
}