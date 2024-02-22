<?php
$array = ['addict', 'applaud', 'amaze', 'aurora', 'attendance', 'amaze'];
$arr = [
    'addict' => 1,
    'applaud' => 12,
    'amaze' => 13,
    'aurora' => 14,
    'attendance' => 15
];
//array();创建一个数组
//count();返回数组元素的数量
var_dump(count($array));
//array_push(原数组，添加的元素);添加元素到数组末尾
array_push($array,'ambition');
print_r($array);
//array_unshift(原数组，添加的元素);添加元素到数组开头
array_unshift($array,'additive');
print_r($array);
//array_pop();删除并返回数组中最后一个元素
$array1 = array_pop($array);
print_r($array1);
//array_shift();删除并返回数组中第一个元素
var_dump(array_shift($array));
//array_slice();提取部分元素组成新数组,支持正负
print_r(array_slice($array,2,3));
//array_reverse();反转数组中元素的顺序
print_r(array_reverse($array));
//in_array();检查数组中是否存在某个值
var_dump(in_array('applaud',$array));
//array_key_exists();检查数组中是否存在某个键
var_dump(array_key_exists('amaze',$arr));
//array_keys();返回数组所有的键，组成新数组
print_r(array_keys($arr,'amaze',true));
//array_values();返回数组所有的值，组成新数组
print_r(array_values($arr));
//array_search();搜索给定值，并返回对应键
print_r(array_search(13,$arr));
//array_unique();移除数组中的重复值
print_r(array_unique($array));

//max()min();最大/小值
var_dump(max($arr));
//sort();数组升序
$test = ['c','k','s','a','A'];
var_dump(sort($test));
print_r($test);
//rsort();数组降序
//array_sum();数组求和
var_dump(array_sum(['2','4','4','5','1']));
//array_product();数组求乘积