<?php
$text = 'hello, my best friend. could you tell me Why crying?';
// echo strlen($text);

//含有指定字符串则输出位置，反之输出false
//var_dump(strpos($text,"my"));

//在字符串内查找字符或指定文本，返回第一次出现的位置或false，但不区分大小写
//var_dump(stripos($text,"M"));

//在字符串内查找字符或指定文本，但返回最后一次出现的位置或false；
//var_dump(strrpos($text,"g"));

//在字符串内查找字符或指定文本，但返回最后一次出现的位置或false，但不区分大小写；
// var_dump(strripos($text,"G"));

//把字符串打散成数组；
// print_r(explode(" ",$text));

//把数组拼接成字符串；
$arr = explode(" ",$text);
print_r(implode("--",$arr));

//strtoupper():把字符串转换为大写；
print_r(strtoupper($text));

// 把字符串转换为小写；
print_r(strtolower($text));

// 将单词的首字母转换为大写；
print_r(ucfirst($text));

// 将单词的首字母转换为小写；
print_r(lcfirst($text));

// 将字符串中每个单词的首字母转换为大写；
print_r(ucwords($text));

//将字符串中的某个子字符串替换为另一个字符串
print_r(str_replace('hello','Hey',$text));

//strrev():将字符串反转
print_r(strrev($text));//不适用中文，会出现乱码

// substr(指定文本,起始位置,指定长度):截取字符串的一部分
print_r(substr($text,2,3));