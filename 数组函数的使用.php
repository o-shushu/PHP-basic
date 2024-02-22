<?php
$numbers = ['2','4','4','5','1'];
function arrayTest($num_arr){
    $arr = [];
    $arr['count'] = count($num_arr);
    $arr['sum'] = array_sum($num_arr);
    $arr['average'] = round($arr['sum'] / $arr['count'],2);//number_format,round()保留2位小数
    $arr['max'] = max($num_arr);
    $arr['min'] = min($num_arr);
    sort($num_arr);
    $arr['sorted'] = $num_arr;
    return $arr;
}
print_r(arrayTest($numbers));