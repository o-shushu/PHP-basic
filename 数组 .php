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
    $one = [
        [
            [
                "aa1", "aa2"
            ],
            "a2",
            "a3"
        ],
        [
            "b1", "b2", "b3"
        ],
        "c"
    ];
    print_r($one[0][0][0]);
    //实战中常见案例
    $common = [
        "test" => [
            "course"=>[
                "php",
                "JS",
                "Java",
            ],
            "teacher"=> [
                "course"=>[
                    "php",
                    "JS",
                    "Java",
                ],
            ],
        ],
        "product"=> [
            "books"=>[
                "book1",
                "book2",
            ],
            "students"=>[
                "xiaoming",
                "xiaohong",
            ]
        ]
        ];
        //遍历多维数组
        foreach($common as $key => $value){
            print_r($key);
            echo'---';
            print_r($value);
            foreach($value as $kk => $vv){
                print_r($kk);
                echo'---';
                print_r($vv);
                if($vv[1] == 'php'){
                    break;
                }
            }
        }
    