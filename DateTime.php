<?php
//加减时间:modify(),new DateInterval()
//(1)
$dateTime = new DateTime("2023-11-01 23:09:22");
$dateTime->modify('-1 hour');
echo $dateTime->format('Y-m-d H:i:s');
echo PHP_EOL;
//(2)
$dateTime = new DateTime("2023-11-01 23:09:22");
$interval = new DateInterval('P1D');
// $dateTime->sub($interval);
$dateTime->add($interval);
echo $dateTime->format('Y-m-d');
echo PHP_EOL;
//设置日期和时间setTime(),setDate()
$dateTime = new DateTime("2023-11-01 23:09:22");
$dateTime->setDate(2024, 1, 1);
$dateTime->setTime(14, 1, 1);
echo $dateTime->format('Y-m-d H:i:s');
//设置并获取时区
//setTimeZone(new DateTimeZone('Asia/Shanghai'));
//getTimeZone()
$dateTime = new DateTime('2020-01-01 00:00:00');
$dateTime->setTimeZone(new DateTimeZone('Asia/Shanghai'));
$dateTimeZone = $dateTime->getTimeZone();
print_r($dateTimeZone->getName());
print_r($dateTimeZone->getLocation());
//将日期时间格式化为指定的字符串格式:format()
//获取时间对象的时间戳：getTimestamp()
$dateTime = new DateTime('2020-02-02 02:02:02');
$timestamp = $dateTime->getTimestamp();
print_r($timestamp);
echo $dateTime->format('Y年m月d日');
//计算时间差:diff()
$dateTime1 = new DateTime('2020-01-01 00:00:00');
$dateTime2 = new DateTime('2020-02-02 02:02:02');
$diff = $dateTime1->diff($dateTime2);//后项减去前项
echo $diff->format('%R %m %d %h %i %s');