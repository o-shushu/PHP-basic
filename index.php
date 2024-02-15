<?php
//数值数组
    $text1 = array("文字1","文字2","文字3","文字4","文字5","文字6");
    $text2 = ["文字1","文字2","文字3","文字4","文字5","文字6"];
    //var_dump和print_r的源码表现形式会不同
    var_dump($text1);
    var_dump($text1[1]);
    var_dump($text2);
    print_r($text1);
    print_r($text2);

    $text3 = [];
    $text3[0] = '0';
    $text3[2] = '2';
    $text3[3] = '3';
    print_r($text3);
//关联数组
    //键不能重复
    $text3 = [
        '0',
        '3',
        'fruit' => 'apple',
        '5',
        'fruit' => 'banana',
    ];

    echo count($text3);
    print_r($text3);
//遍历数组
    //for循环的遍历只适合数值数组

    //foreach适合所有数组
    foreach($text2 as $value){
        echo $value;
        echo '<br>';
    }
    foreach($text3 as $key => $value){
        echo $key.'---'.$value;
        echo '<br>';
    }
//多维数组:数组里放数组。上述为一维数组