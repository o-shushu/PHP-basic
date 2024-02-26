<?php
//time()获取当前的时间戳（10位）
echo time();
echo PHP_EOL;
//microtime(true)返回一个浮点数时间戳（秒数和微秒数的总和）
echo microtime(true);
echo PHP_EOL;
echo microtime(false);
echo PHP_EOL;
echo round(microtime(true)*1000);
echo PHP_EOL;
//date(格式，时间戳) 日期格式化
$time = time();
echo date('Y-m-d H:i:s',$time);
echo PHP_EOL;
//strtotime(string)
$time = strtotime('next monday');
echo date('Y-m-d H:i:s',$time);
//在指定时间的基础上改变日期
$baseTime = strtotime('2020-01-01');
$time = strtotime('next monday',$baseTime);
echo date('Y-m-d H:i:s',$time);

$baseTime = time();
$time = strtotime('+2 day',$baseTime);
echo date('Y-m-d H:i:s',$time);
//mktime($hour, $minute, $second, $month, $day, $year);生成时间戳
//date_create(string);输出为对象
//date_format(object,时间格式);
echo mktime(2,30,56,4,8,2023);
$object = date_create('2020-01-01');
var_dump($object);
echo date_format($object,'Y年m月d日');
//date_diff()计算两个日期之间的差，后项减前项
//%Y: 完整年份的差
//%y: 年份的差异（两位数）
//%m: 月份的差异
//%d: 天数的差异
//%a: 总共的天数差异
//%H: 小时的差异
//%h: 小时的差异（12小时）
//%I: 分钟的差异
//%S: 秒数的差异
//%R: 正负
//%r: 正负（必须为负时才会显示）
$date1 = date_create('2020-01-01  9:35:46');
$date2 = date_create('2020-01-03  17:05:26');
$diff = date_diff($date1,$date2);
echo $diff->format('%y 年 %m 月 %d 天 %H %I %S %R %r');
//strftime(): 将时间戳化为可读的日期和时间字符串，支持本地化的日期和时间格式；php8已废弃
$timestamp = time();
$dateString = $strftime("%A %Y-%m-%d %H:%M:%S", $timestamp);//%A表示星期
echo $dateString;
//gmdate()将GMT（格林威治标准时间）格式化为可读的日期和时间字符串；忽视服务器的时区设置
//date()：使用本地时间为基准，根据当前服务器的时区设置来格式化日期和时间。
//date_default_timezone_set($timezone);设置默认时区；只能在脚本开始时设置，不能在运行时动态设置
//时区设置如：'UTC'（格林威治时间），'localhost'本地时区，'Asia/Shanghai'指定时区
//timezone_identifiers_list()返回所有可用时区标识符的数组，查询某地时区时常用
echo gmdate('Y-m-d H:i:s');
echo date('Y-m-d H:i:s');
date_default_timezone_set('Asia/Shanghai');
print_r(timezone_identifiers_list());
