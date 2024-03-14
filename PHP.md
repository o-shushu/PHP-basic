### 认识PHP
* 特点
* 组成
* 实现效果
* 使用理由
* 编辑器推荐
#### 特点
    超文本预处理
    动态交互，服务端用脚本语言
    解释型语言，无需编译，直接运行
#### 组成
    php文件包含html,css,JS
    服务器上执行，结果以纯文本格式返回给浏览器
#### 实现效果
    生成动态页面（html页面渲染）
    对服务器上进行文件操作
    发送取回cookies
    数据库操作
    用户访问网站的权限管理
    接收表单数据
    对数据加密，压缩
#### 使用理由
    跨平台（windows,linux,unix,macOs等）
    兼容几乎所有的服务器
    支持多种数据库
#### 工具推荐
    编辑器：vscode,notepad,phpStorm
    集成环境：phpStudy(小皮面板)
    live server插件安装：实时刷新网页工具

### 基础PHP语法
* 基本格式
* 输出方法
    * echo
    * print
    * echo和print区别
* 注释
    * 作用
* 变量
* php加入系统环境变量
* 命令行使用
* 数据类型
    * var_dump()
    * 字符串
    * 整数
    * 浮点数
    * 逻辑（布尔型）
    * 数组
    * 对象
    * Null
    * 资源类型
* EOF定界符的使用
* 运算符
    * 算术运算符
    * 赋值运算符
    * 递增递减运算符
    * 比较运算符
    * 逻辑运算符
    * 优先级
* 条件语句
    * if else
    * switch case 条件分支
#### 基本格式
php脚本可以放置在文档中的任意位置
不能写在HTML,js,css文件里运行
语句以分号结尾
```php
    <?php 脚本 ?>
```
#### 输出方法
* echo:一个以上字符串，用逗号隔开
* print:只能输出1个字符串，返回值始终为1
* echo和print区别
    * echo比print快一点
    * 两者有无括号都可使用
#### 注释
* 作用:供别人阅读；提醒自己
    * 单行注释//,#
    * 多行注释/*  */
#### 变量
* 变量命名规则：
    * $开头，名称只能包含字母，数字，下划线
    * 必须以字母或下划线开头
    * 不能以数字开头，不能有空格
    * 对大小写敏感

* 命名方法：大小驼峰法，下划线法
注：只有变量名对大小写敏感。如：echo 和 ECHO都能用

空白符
#### php加入系统环境变量P5
#### 命令行使用
* WIN+R,输入cmd
* 输入php,再拖入文件可以直接打开文件
* Code Runner插件可以直接运行文件
* 获取用户输入的内容：readline("请输入内容：")
#### 数据类型
* var_dump()
    var_dump()返回变量的数据类型和值，用于开发，调试
    只获取数据类型gettype($input);
    ```php
    $text = 'apple';
    echo gettype($text);
    ```
* 字符串
    单双引号的区别:
    ```php
    $text = 'apple';
    echo "文本是$text";//文本是apple
    echo '文本是$text';//文本是$text
    ```
* 整数
    * 必须至少有一个数字
    * 不能包含逗号和空格
    * 不能有小数
    * 正负均可
    * 可用三种格式规定整数：十进制，十六进制，八进制
    ```php
    //最后全转为十进制表示
        $x = 589;
        var_dump($x);
        echo '<br>';
        $x = -345;
        var_dump($x);
        echo '<br>';
        $x = 0x8c;
        var_dump($x);
        echo '<br>';
        $x = 047;
        var_dump($x);
        echo '<br>';
    ```
* 浮点数
    ```php
        $x = 10.365;
        var_dump($x);
        echo '<br>';
        $x = 2.4e3;
        var_dump($x);
        echo '<br>';
        $x = 8E-5;
        var_dump($x);
        echo '<br>';

    ```
* 逻辑（布尔型）
* 数组：一个变量中存储多个值
    ```php
        $cars = array("BMW","Volvo","SAAB");
        $_cars = ["BMW","Volvo","SAAB"];
        var_dump($cars);
        var_dump($_cars);
    ```
* 对象
* Null即没有
    ```php
        $text = "Hello World!";
        var_dump($text);
        $text = null;
        var_dump($text);
    ```
* 资源类型
#### EOF定界符的使用
#### 运算符
* 算术运算符
* 赋值运算符
* 递增递减运算符
* 比较运算符
* 逻辑运算符
* 优先级
#### 条件语句(condition.php)
* if else
* switch case 条件分支
```php
//条件多，单一固定值的匹配
$a = 10;
switch ($a){
    case '20':
        echo '--20';
        break;
    case 30:
        echo '--30';
        break;
    default:
        echo '--00';
}
```

#### 循环语句(condition.php)
* for预先知道脚本要运行多少次
* while(){...}
```php
$a = 10;
while($a <= 20){
    $a++;
    if($a == 15){
        // continue;
        for ($i=0; $i<5;$i++) {
            if($i==3){
                break 2;//同时跳出for和while,没有2的情况下只跳出for
            }
            echo '<br>'.$i.'<br>';
        }
    }
    echo $a.'---';
}
echo '已跳出全部循环';
```
* do{...}while
* foreach循环

#### 数组(数组.php)
* 数值数组
    ```php
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
    ```
* 关联数组
    ```php
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
    ```
* 遍历数组
    ```php
    $text2 = ["文字1","文字2","文字3","文字4","文字5","文字6"];
    $text3 = [
        '0',
        '3',
        'fruit' => 'apple',
        '5',
        'fruit' => 'banana',
    ];
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
    ```
* 多维数组
    一般最复杂的就是三维数组，
    ```php
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
    ```
    * 遍历多维数组
    ```php
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
    ```

#### 函数(function.php)
    函数可以重复使用的代码块
    内置函数：print_r(),count(),time()(输出时间戳)
    自定义函数
    函数准则：从名称能看出函数功能
    不能以数字开头
```php
    function nowTime(){
        echo date('Y-m-d H:i:s');
    }

    nowTime();
```
* 添加参数
    ```php
        function nowTime($type){
            if($type == "time"){
                echo date('Y-m-d H:i:s');
            } else if ($type == "day"){
                echo date('Y-m-d');
            }
        }

        nowTime("time");
    ```
* 添加多个参数
    ```php
        function plus(int $a,int $b){
            echo $a + $b;
        }

        plus(int $a,int $b);
    ```
* 严格模式的定义
    declare(strict_types=1);
    ```php
    declare(strict_types=1);
    function plus(int $a,int $b){
    echo $a + $b;
    }
    plus('2',3.5);//无declare时，5；有Fatal error
    ```
* 返回值
    return,可有可无，但一般都有
    ```php
        declare(strict_types=1);
        function plus(int $a,int $b){
            return $a + $b;
        }

        $result = plus(int $a,int $b);
        echo $result;
    ```

#### 变量的作用域
  变量即在脚本中可被引用/使用的部分
```php
    declare(strict_types=1);
    function plus(int $a,int $b){
        return $a + $b;
    }

    $result = plus(int $a,int $b);
    echo $result;
```
* 全局变量
    在函数内使用全局变量
    ```php
        $test1 = 'measurement';
        function test(){
            global $test1;
            $age = "12";
            echo $test1;
        }
        test();
    ```
* 局部变量
    函数内部定义的变量为局部变量
* static作用域
    static 函数执行完后希望某个变量不被删除时使用static进行声明，则该变量将会保留前一次被调用时的值，且该变量仍为函数的局部变量。
    ```php
    function test(){
        // $a=0;
        static $a=0;
        echo $a;
        $a++;
        echo PHP_EOL;//换行符
    }
    // 无static时
    test();//0
    test();//0
    test();//0
    // 有static时
    test();//0
    test();//1
    test();//2
    ```
    unset()在函数内无法将全局变量给删除，但可删除函数内变量
    isset()判断变量是否存在，是否被定义声明且不为NULL
    * 补充:isset() 主要用于检查一个变量是否已经被设置（即声明）且不为 null。
        如果变量已经被设置且不为 null，isset() 返回 true；否则，返回 false。
        如果变量未声明，使用 isset() 也会返回 false。
* 超级全局变量
    不仅可在函数里使用，还可以在项目的任何一个文件内使用
    * $GLOBALS:包含了全部变量的全局组合数组，变量名字就是数组的键。
        ```php
        $name = "Jane";
        $age = 20;
        // print_r($GLOBALS);
        function Text() {
            // global $name, $age;
            // $name = "Ann";
            // $age = 28;
            // echo $name;
            // echo $age;
            $GLOBALS["name"] = "Ann";
            $GLOBALS["age"] = 28;
            echo $GLOBALS["name"].'---'.$GLOBALS["age"];
        }

        Text();
        echo $name;
        echo $age;
        ```
    * $_SERVER:包含头信息（header），路径（path），脚本位置（script locations）等信息的数组。
        数组中项目由web服务器创建
        ```php
        print_r($_SERVER);//可在菜鸟教程处查看各变量的具体含义
        ```
    * 函数的使用实战
        ```php
        $array = [];
        function getFactors($number) {
            for($i = 2; $i <= $number/2; $i++){
                if($number % $i === 0){
                    $array[] = $i;
                }
            }

            return $array;
        }

        $num = getFactors(24);
        print_r($num);
        ```
    * 其他运算符-数组运算符
        * +(合并)：只会保留第一个数组的键值对，若后面数组出现相同键名的元素则会被忽略
            若想新的覆盖旧的就用array_merge()
            ```php
            $a = [
                "a1" => "graduate",
                "a2" => "applaud",
            ];
            $b = [
                "b1" => "lotus",
                "b2" => "pleasant",
                "a2" => "gangster",
            ];

            print_r($a + $b);
            // [a1] => graduate
            // [a2] => applaud
            // [b1] => lotus
            // [b2] => pleasant

            print_r($b + $a);
            // [b1] => lotus
            // [b2] => pleasant
            // [a2] => gangster
            // [a1] => graduate

            //新的覆盖旧的
            print_r(array_merge($a,$b));
            // [a1] => graduate
            // [a2] => gangster
            // [b1] => lotus
            // [b2] => pleasant
            ```
        * ==：键值对相同
                ===：相同键值对，顺序，类型相同
            ```php
            $a = [1,2,3];
            $b = [1,2,'3'];
            $c = [
                "a1" => 123,
                "a2" => 456,
                ];
            $d = [
                "a2" => 456,
                "a1" => 123, 
                ];

            var_dump($a == $b);//值相同。true
            var_dump($a === $b);//值相同,但类型不同。false
            var_dump($c == $d);//键值对相同。true
            var_dump($c === $d);//键值对相同，但顺序不同。false
            ```
        * !=和<>:两者效果相同，都是不等于
        * 三元运算符?:if else作用相同
        ```php
        $text = 'hahaha';
        $text ?:'nothing';
        var_dump($text);
        ```
    * 空合并运算符??:
        * php7之后支持的。判断一个变量是否未定义或为NULL，若为未定义或为NULL则返回指定的默认值；否则返回该变量的值
        * ?? 运算符用于检查左侧的表达式是否为 null。如果左侧表达式为 null，则返回右侧表达式的值；否则，返回左侧表达式的值。
        * ?? 并不关心变量是否被声明，只关心它的值是否为 null。
        ```php
        $name = $username ?? "George";//如果$username定义了就输出定义值，未定义就输出George
        echo $name;
        ```
    * 组合比较符<=>:
        用于比较，可以比较整形，浮点型，字符串;
        返回三个整数1，0，-1;
        只会比较值，不会比较类型；
        整形和浮点型可以比较；
        字符串中字母的比较会比较ASCII码
        语法:
        $c = $a <=> $b;
        $a > $b,$c值1
        $a == $b,$c值0
        $a < $b,$c值-1
        ```php
        $a = "acd";
        $b = "ace";
        var_dump($a<=>$b);//-1
        ```
    * isset(),is_null(),empty()
       isset(): 判断变量是否被定义，是否为NULL;用于检查一个变量是否已经被设置（即声明）且不为 null。
       is_null(): 需用于定义的变量，若不是的话就会出现警告，只能判断一个变量是否为NULL;用于检查一个变量是否为 null。
       empty(): 对于未定义的变量返回true，使用之前应确保变量已被定义;用于检查一个变量是否为空;
        * 变量被认为为空的情况包括：
            * 不存在
            * 其值为 false
            * 其值为 0（作为整数）
            * 其值为 '0'（作为字符串）
            * 其值为空数组
            * 其值为空字符串
            * 其值为 null

       判断变量是否为0或false时必须用全等于
        ```php
        $name = NULL;
        var_dump(!isset($name));
        var_dump(is_null($name));
        var_dump(empty($name));
        ```
* 字符串相关函数(使用方法看function.php)
    * strlen():获取字符串长度
    ```php
    $text = 'hello, my best friend. could you tell me Why crying?';
    echo strlen($text);//52
    ```
    * strpos():在字符串内查找字符或指定文本，返回第一次出现的位置或false；
    * stripos():和strpos()相同，但不区分大小写；
    * strrpos():在字符串内查找字符或指定文本，但返回最后一次出现的位置或false；
    * strripos():返回最后一次出现的位置或false，但不区分大小写；
    * explode():把字符串打散成数组；
    * implode():把数组拼接成字符串；
    * strtoupper():把字符串转换为大写；
    * strtolower():把字符串转换为小写；
    * ucfirst():将单词的首字母转换为大写；
    * lcfirst():将单词的首字母转换为小写；
    * ucwords():将字符串中每个单词的首字母转换为大写；
    * str_replace($search,$replace,$string):将字符串中的某个子字符串替换为另一个字符串
    * strrev():将字符串反转
    * trim():去除字符串两端的空格
    * substr():截取字符串的一部分
    * mb_substr():截取字符串的一部分（中文），需要安装扩展mbstring
    * 实战
        * 字符串函数的使用:将语句'What ARE You Doing NOW? LOTUS.'每个单词首字母转为小写输出。
* 数组相关函数
    * array();创建一个数组
    * count();返回数组元素的数量
    * array_push(原数组，添加的元素);添加元素到数组末尾
    * array_unshift(原数组，添加的元素);添加元素到数组开头
    * array_pop();删除并返回数组中最后一个元素
    * array_shift();删除并返回数组中第一个元素
    * array_slice();提取部分元素组成新数组
    * array_reverse();反转数组中元素的顺序
    * in_array();检查数组中是否存在某个值
    * array_key_exists();检查数组中是否存在某个键
    * array_keys();返回数组所有的键，组成新数组
    * array_values();返回数组所有的值，组成新数组
    * array_search();搜索给定值，并返回对应键
    * array_unique();移除数组中的重复值
    * max()min();最大/小值
    * sort();数组升序
    * rsort();数组降序
    * array_sum();数组求和
    * array_product();数组求乘积
* 时间，日期相关知识
    * time()获取当前的时间戳（10位）
        ```php
        echo time();
        echo PHP_EOL;

        ```
    * microtime(true)返回一个浮点数时间戳（秒数和微秒数的总和）
        ```php
        echo microtime(true);
        echo PHP_EOL;
        echo microtime(false);
        echo PHP_EOL;
        echo round(microtime(true)*1000);
        echo PHP_EOL;

        ```
    * date(格式，时间戳) 日期格式化
        ```php
        $time = time();
        echo date('Y-m-d H:i:s',$time);
        echo PHP_EOL;

        ```
    * strtotime(string)
        ```php
        $time = strtotime('next monday');
        echo date('Y-m-d H:i:s',$time);

        ```
    * 在指定时间的基础上改变日期
        ```php
        $baseTime = strtotime('2020-01-01');
        $time = strtotime('next monday',$baseTime);
        echo date('Y-m-d H:i:s',$time);

        $baseTime = time();
        $time = strtotime('+2 day',$baseTime);
        echo date('Y-m-d H:i:s',$time);

        ```
    * mktime($hour, $minute, $second, $month, $day, $year);生成时间戳
    * date_create(string);输出为对象
    * date_format(object,时间格式);
        ```php
        echo mktime(2,30,56,4,8,2023);
        $object = date_create('2020-01-01');
        var_dump($object);
        echo date_format($object,'Y年m月d日');

        ```
    * date_diff()计算两个日期之间的差，后项减前项
        * %Y: 完整年份的差
        * %y: 年份的差异（两位数）
        * %m: 月份的差异
        * %d: 天数的差异
        * %a: 总共的天数差异
        * %H: 小时的差异
        * %h: 小时的差异（12小时）
        * %I: 分钟的差异
        * %S: 秒数的差异
        * %R: 正负
        * %r: 正负（必须为负时才会显示）
        ```php
        $date1 = date_create('2020-01-01  9:35:46');
        $date2 = date_create('2020-01-03  17:05:26');
        $diff = date_diff($date1,$date2);
        echo $diff->format('%y 年 %m 月 %d 天 %H %I %S %R %r');

        ```
    * strftime(): 将时间戳化为可读的日期和时间字符串，支持本地化的日期和时间格式；php8已废弃
        ```php
        $timestamp = time();
        $dateString = $strftime("%A %Y-%m-%d %H:%M:%S", $timestamp);//%A表示星期
        echo $dateString;

        ```
    * gmdate()将GMT（格林威治标准时间）格式化为可读的日期和时间字符串；忽视服务器的时区设置
    * date()：使用本地时间为基准，根据当前服务器的时区设置来格式化日期和时间。
    * date_default_timezone_set($timezone);设置默认时区；只能在脚本开始时设置，不能在运行时动态设置
    * 时区设置如：'UTC'（格林威治时间），'localhost'本地时区，'Asia/Shanghai'指定时区
    * timezone_identifiers_list()返回所有可用时区标识符的数组，查询某地时区时常用
        ```php
        echo gmdate('Y-m-d H:i:s');
        echo date('Y-m-d H:i:s');
        date_default_timezone_set('Asia/Shanghai');
        print_r(timezone_identifiers_list());

        ```
* DateTime对象 
    * 加减时间:modify(),new DateInterval()
    * (1)
        ```php
        $dateTime = new DateTime("2023-11-01 23:09:22");
        $dateTime->modify('-1 hour');
        echo $dateTime->format('Y-m-d H:i:s');
        echo PHP_EOL;

        ```
    * (2)
        ```php
        $dateTime = new DateTime("2023-11-01 23:09:22");
        $interval = new DateInterval('P1D');

        ```
    *  $dateTime->sub($interval);
        ```php
        $dateTime->add($interval);
        echo $dateTime->format('Y-m-d');
        echo PHP_EOL;

        ```
    * 设置日期和时间setTime(),setDate()
        ```php
        $dateTime = new DateTime("2023-11-01 23:09:22");
        $dateTime->setDate(2024, 1, 1);
        $dateTime->setTime(14, 1, 1);
        echo $dateTime->format('Y-m-d H:i:s');

        ```
    * 设置并获取时区
    * setTimeZone(new DateTimeZone('Asia/Shanghai'));
    * getTimeZone()
        ```php
        $dateTime = new DateTime('2020-01-01 00:00:00');
        $dateTime->setTimeZone(new DateTimeZone('Asia/Shanghai'));
        $dateTimeZone = $dateTime->getTimeZone();
        print_r($dateTimeZone->getName());
        print_r($dateTimeZone->getLocation());

        ```
    * 将日期时间格式化为指定的字符串格式:format()
    * 获取时间对象的时间戳：getTimestamp()
        ```php
        $dateTime = new DateTime('2020-02-02 02:02:02');
        $timestamp = $dateTime->getTimestamp();
        print_r($timestamp);
        echo $dateTime->format('Y年m月d日');

        ```
    * 计算时间差:diff()
        ```php
        $dateTime1 = new DateTime('2020-01-01 00:00:00');
        $dateTime2 = new DateTime('2020-02-02 02:02:02');
        $diff = $dateTime1->diff($dateTime2);//后项减去前项
        echo $diff->format('%R %m %d %h %i %s');

        ```

#### 特殊的变量写法和常量
* $a $$a $$$a
    ```php
    $a = 'aerospace';
    $$a = '你好';
    $$$a = 'test';
    echo $a;
    echo PHP_EOL;
    echo $$a;
    echo PHP_EOL;
    echo $aerospace;
    echo PHP_EOL;
    echo $你好;
    ```
* 魔术常量
    值随着代码中的位置的改变而改变
    * __LINE__:当前行号
    * __FILE__:文件的完整路径和文件名，包括盘符的根目录
    * __DIR__:文件所在目录
    * __FUNCTION__:当前函数名字
    * __CLASS__:被定义时类的名字
    * __NAMESPACE__:输出命名空间
    * __METHOD__:输出命名空间，函数名，类名
    * __TRAIT__:(类的内容时说明)

#### 文件包含
* include和require
    * 区别：处理错误的方式不同
    require：错误发生后脚本停止执行；必须文件常用。
    include：错误发生后脚本继续执行；找不到文件会生成warning，可选文件常用。
    * 案例header.php  homepage.php
* include_once和require_once
    仅调用一次.
    快速插入路径方法：先拖住文件到某个位置，按住shift并松手则绝对路径自动插入
    实践案例p36

### 面向对象
* 对象  
    程序设计中，对象是由[信息]及对[信息进行处理的描述]所组成的整体。

* 面向对象(OOP)
    * 概念
        将程序中的[数据]和[操作数据的方法]封装在一起，形成对象；
        [对象之间]的[交互]和[消息传递]来完成程序功能；
        OOP强调[数据]的[封装]，[继承]，[多态]和[动态绑定]等特性，使程序有更好的[可扩展性]，[可维护性]，[可重用性]。

    * 对象的主要三个特性
        对象的[行为]：对象可执行的操作。如：开/关灯操作。
        对象的[形态]：如何响应对象的不同行为。如：颜色，尺寸等属性。
        对象的[表示]：用什么去表示对象（面向对象编程中，通常使用类来表示）。
    * 面向对象的主要三个特性
        * 封装
            将对象[属性]和[方法]封装在一起，使[外部无法直接访问和修改对象内部状态]；
            使用[访问修饰符]限制[属性和方法]的访问权限，实现封装；
            [访问修饰符]：public，private，protected。
        * 继承
            [创建]一个[新类]，该类[继承]了[父类的属性和方法]，且可添加[自己的属性和方法]；
            继承可以[避免重复编写相似代码]，[实现代码重复利用]；
            只能继承一个，不能对父类造成影响，但可以改动继承的属性和方法。
        * 多态
            使用[一个父类的变量]来[引用不同子类的对象]，实现对不同对象的统一操作；
            通过[接口interface]和[抽象类abstract_class]来实现。

* 类 (class.php)
    * 概念
        定义事物的抽象特点；
        包含[数据形式:如名字，性别等属性]及[对数据的操作];
    * 使用方法
        * （1）定义
            class 类名 {

            }
        * （2）调用
            new 实例化对象
    * 类的方法和属性
        * 类的方法（即函数）
            public function 函数名(){

            }
        注意：public可以省略，默认自带
        * $this：表自身的对象
            ```php
                //不采用$this
                class Fruits {
                    public $name;
                    public $color = 'pink';
                    function flower($name) {
                        echo $name.'开花了';
                    }
                }
                $apple = new Fruits;
                $apple->name = 'apple';
                echo $apple->name;
            ```
            ```php
                //采用$this
                class Fruits {
                    public $name;
                    public $color = 'pink';
                    function flower() {
                        echo $this->name.'开花了';
                    }
                }
                $cheery = new Fruits;
                $cheery->name = 'cheery';
                echo $cheery->flower().'</br>flower is '.$cheery->color;
            ```
    * 访问控制
        * public：可在任何地方被访问；
        * private：自身，子类及其父类能访问；
        * protected：只有自己能访问；
        注意：private和protected也能通过某些方法让外部能访问
        * 案例（private）
            ```php
                class Fruits {
                    private $name = 'cheery';
                    public $color = 'pink';
                    function flower() {
                        echo $this->name.'开花了';
                    }
                    function getName(){
                        return $this->name;
                    }
                    function setName($name){
                        $this->name = $name;
                    }
                }
                $cheery = new Fruits;
                echo $cheery->getName().'</br>';
                echo $cheery->flower().'</br>';
                $cheery->setName('peach');
                echo $cheery->flower();
            ```
    * 构造函数__construct
        创建新对象时被自动调用；
        初始化对象属性，执行一些必要操作；
        没有返回值。
        * 初始化对象属性
            ```php
                //构造函数__construct，初始化对象属性
                class Fruits {
                    private $name;
                    public function __construct()
                    {
                        $this->name = 'George';
                    }
                    public function eat(){
                        echo $this->name.'在吃水果';
                    }
                }
                $George = new Fruits;//创建的同时也执行构造函数
                echo $George->eat();
            ```
            ```php
                //构造函数__construct，传参
                class Fruits {
                    private $name;
                    public function __construct($name)
                    {
                        $this->name = $name;// 构造函数将参数给内部变量
                    }
                    public function eat(){
                        echo $this->name.'在吃水果';
                    }
                }
                $Jane = new Fruits('Jane');//创建的时候必须传参
                echo $Jane->eat();
            ```
        * 执行一些必要操作
            ```php
                //构造函数__construct，传参
                class Fruits {
                    public $name;
                    private $birth;
                    private $age;
                    public function __construct($name,$birth)
                    {
                        $this->name = $name;
                        $this->birth = $birth;
                        //对初始对象执行一些必要操作
                        $this->age = floor((time() - strtotime($birth))/3600/24);

                    }
                    public function eat(){
                        echo $this->name.'在吃水果';
                    }
                    public function getInfo(){
                        echo "$this->name is burned in $this->birth. now age is $this->age day";
                    }
                }
                $cheery = new Fruits('cheery', '2020-02-02');//创建的时候必须传参
                echo $cheery->getInfo();
            ```
    * 析构函数__destruct(使用频率很低)p42
        对象被销毁时自动调用；
        执行一些清理操作，如释放资源，关闭数据库连接；
        对象不再被引用或脚本执行结束时，析构函数会被自动调用。
        注意：php会自动关闭用不到的连接或资源，因此一般不特意使用析构函数
    * 静态变量static和self
        静态变量static：无需对类进行实例化，就可直接调用属性和方法
        ```php
            class Fruits {
                public $name;
                public static $color = 'red';
                public function eat(){
                    // echo $this->color;//会有警告
                    // echo Fruits::$color;//效果同下，但一般不使用
                    echo self::$color;//常用

                }
                
            }
            $cheery = new Fruits;
            Fruits::$color = 'pink';//所有对静态变量进行的操作都会对所有对象起作用
            echo $cheery->eat();
        ```
        注：所有对静态变量进行的操作都会对所有对象起作用
    * 类常量
        和静态属性类似，唯一区别：类常量不可更改，静态属性可以；
        const关键字定义,self::常量名去取;
        使用场景：所有对象共用一个属性。
        ```php
        class Fruits {
            public $name;
            public static $color = 'red';
            const TASTE = 'sweet';//类常量定义
            public function eat(){
                echo self::TASTE;//类常量获取

            }   
        }
        $cheery = new Fruits;
        echo $cheery->eat();
        echo Fruits::TASTE;//类常量外部获取
        ```
    * static静态方法
        * 调用静态方法，静态变量
            ```php
                class Fruits {
                    public static $name = 'cheery';
                    public static $color = 'red';
                    const TASTE = 'sweet';
                    public static function eat(){
                        echo self::$name;
                        echo self::TASTE;

                    }
                    public static function say() {
                        echo self::eat();
                    }
                    
                }
                $cheery = new Fruits;
                echo $cheery->say();
            ```
        * 调用非静态方法，非静态变量
            ```php
                class Fruits {
                    public $name = 'cheery';//非静态变量
                    public static $color = 'red';
                    const TASTE = 'sweet';
                    public function eat(){//非静态方法
                        echo "my name is $this->name";

                    }
                    public static function say() {
                        echo (new self)->eat();
                    }
                    
                }
                $cheery = new Fruits;
                echo $cheery->say();
            ```
    * 类的继承
        * 特点
            * (1)extends关键字；
            * (2)能够继承父类属性；
            * (3)不能够在外部直接访问继承的父类的protected,private属性；
            * (4)被保护属性，需在内部取。
            ```php
                class Fruits {
                    public $sort = 'crispy';
                    protected $price = 20;
                    private $taste = 'delicious';   
                }

                class Apple extends Fruits {
                    public function getInfo()
                    {
                        echo $this->price;
                        //echo $this->taste;//private取不到
                    }
                }
                //能够继承父类属性
                // var_dump(new Fruits);//var_dump只能打印对象的属性，不能打印对象方法
                // var_dump(new Apple);

                //不能够外部直接访问继承父类的protected,private属性
                // $apple = new Apple;
                // echo $apple->price;//提示被保护，需在内部取
                // echo $apple->taste;//提示未定义

                //被保护属性，需在内部取
                $apple = new Apple;
                echo $apple->getInfo();
            ```
            * (5)继承父类的构造函数，方法；
            * (6)能使用自己的方法；
            * (7)父类不能使用子类的方法；
            ```php
                class Fruits {
                    protected $price;
                    
                    public function __construct($price)
                    {
                        $this->price = $price;
                    }

                    public function eat()
                    {
                        echo "$this->price is expensive";
                    }
                }

                class Apple extends Fruits {
                    public function getInfo()
                    {
                        echo "really expensive, but buy one get one free.Get it!";
                    }
                }

                $apple = new Apple(20);//继承父类的构造函数
                echo $apple->eat().'</br>';//继承父类的方法
                echo $apple->getInfo();//使用自己的方法

                $fruit = new Fruits(19);
                echo $fruit->getInfo();//父类不能使用子类的方法
            ```
    * 方法和属性重写
        ```php
            class Fruits {
                protected $price = 30;
                
                public function eat()
                {
                    echo "$this->price is expensive";
                }
            }

            class Apple extends Fruits {
                public function getInfo()
                {
                    echo "really expensive, but buy one get one free.Get it!";
                }
            }

            $apple = new Apple;
            echo $apple->eat();
        ```
    * final关键字
        * 作用：防止类被继承；防止类的方法被重写。
        注：不能用于属性，可放在public前后
        ```php
            final class Fruits {
                protected $price = 30;
                
                final public function eat()
                {
                    echo "$this->price is expensive";
                }
            }

            class Apple extends Fruits {
                //父类的方法和属性被重写
                protected $price = 10;

                public function eat()
                {
                    echo "$this->price is not expensive";
                }

                public function getInfo()
                {
                    echo "really expensive, but buy one get one free.Get it!";
                }
            }

            $apple = new Apple;
            echo $apple->eat();
        ```
    * 调用父类方法
        parent::
        ```php
            class Fruits {
                protected $price;
                
                public function __construct($price)
                {
                    $this->price = $price;
                }
                public function eat()
                {
                    echo "$this->price is expensive";
                }
            }

            class Apple extends Fruits {
                public function __construct($price, $taste)
                {
                    parent::__construct($price);//调用父类的构造函数
                    echo "This is a construct of Apple : $taste";
                }
                public function getInfo()
                {
                    parent::eat();//调用父类方法
                    echo "Really expensive, but buy one get one free.Get it!";
                }
            }
            $apple = new Apple(50, 'delicious');
            echo $apple->getInfo();
        ```
    * 静态延迟绑定：static
        * 作用：调用实际运行的类的方法和属性
        * 语法：static::$变量名
        ```php
            class Status {
                protected static $name = 'George';
                
                public static function action()
                {
                    echo self::$name ." is playing";
                    echo "-------";
                    echo static::$name ." is playing";
                }
            }

            class Child extends Status {
                protected static $name = 'Ann';
            }
            Child::action();//George is playing-------Ann is playing
            Status::action();//George is playing-------George is playing
        ```
    * 类的多态
        * 多态：[不同类的对象]对[相同消息]作出[不同响应]。通过[方法重写]和[方法重载]来实现。
        * 方法重载：
            子类重写父类的方法，改变方法的实现细节；
            同一个类中根据参数个数或类型不同来实现不同的功能；
            多态性只适用于继承关系的类，子类必须重写父类的方法才能实现多态。
            func_get_args();获得参数(返回包含函数参数列表的数组)
            func_num_args(); 获得参数的数量
            ```php
                class Status {
                    public function action()
                    {
                        echo "Pet is roaring";
                    }
                }

                class Pets extends Status {
                public function action()
                {
                    $numArgs = func_num_args();
                    var_dump($numArgs);
                    switch($numArgs){
                        case 2:
                            echo 'action 2';
                            break;
                        case 3:
                            echo 'action 3';
                            break;
                        default:
                            echo 'action default';
                    }
                }
                }

                $pets = new Pets();
                $pets->action('dog','cat',2);
            ```

    * 接口和抽象类
        * 接口（interface）：
            * 特点：
                一组方法的集合，不是类，不能实例化；
                只可使用public;
                指定某个类必须实现某些方法，定义规范;
                同一个类可以执行(implements)多个接口，接口间[逗号隔开]。
            * 规范：
                interface 名字 {
                    public function a();
                    public function b();
                }
            * 案例
                ```php
                    interface Action{
                        const PEOPLE = 'health';
                        public function eat();
                        public function sleep($hours);
                        public static function drink();
                    }

                    class Human implements Action {
                        public function eat()
                        {
                            echo 'human must eat.';
                        }

                        public function sleep($hours)
                        {
                            echo "human must sleep.$hours";
                        }

                        public static function drink()
                        {
                            echo 'human must drink.';
                        }
                    }
                    $human = new Human();
                    echo $human->eat();
                    echo $human->sleep(8);
                    echo Human::PEOPLE;
                    echo Human::drink();
                ```

        * 抽象类和抽象方法
            * 抽象类（是类）
                * 特点：
                    只能被继承，不能被实例化；
                    用于定义相关方法，方法的实现由子类来完成；
                    子类继承抽象类，必须实现抽象类中的所有抽象方法；
                    抽象类可以包含抽象方法和普通方法
                * 规范：
                    abstract class 名字 {

                    }
            * 抽象方法
                * 特点：
                    只有方法声明，不需具体实现；
                    只存在于抽象类中；
                    可以使用protected,不可用private。
                * 规范：
                    abstract public function a();
                    abstract public function b();
            * 案例
                ```php
                    abstract class Action{
                        abstract public function eat();
                        abstract protected function sleep($hours);
                        public $name;
                        public function __construct(String $name = 'Ann'){
                            $this->name = $name;
                        }
                        public function drink(){
                            echo $this->name."hahaha";
                        }
                    }

                    class Human extends Action {
                        public function eat()
                        {
                            echo 'human must eat.';
                        }

                        public function sleep($hours)
                        {
                            echo "human must sleep.$hours";
                        }

                    
                    }
                    $human = new Human();
                    echo $human->drink();
                ```
        * 接口和抽象类的区别p51 
            * 抽象类可以包含非抽象方法的实现，接口只能包含方法声明；
            * 子类只能继承一个抽象类，但可以实现多个接口；
            * 抽象类里可以有构造函数，但接口里不能有；
            * 抽象类中的[方法]可以有public，protected,private访问修饰符，而接口中的方法只能是public；
            * 子类继承抽象类时，必须实现抽象类中的[所有]的[抽象方法](注意区分普通方法)，否则子类也必须声明为抽象类；
                ```php
                abstract class Action{
                    abstract public function eat();
                    abstract protected function sleep($hours);
                    public $name;
                    public function __construct(String $name = 'Ann'){
                        $this->name = $name;
                    }
                    public function drink(){
                        echo $this->name."hahaha";
                    }
                }

                abstract class Human extends Action {
                    
                    public function eat()
                    {
                        echo 'human must eat.';
                    }
                
                }
                class Ann extends Human {
                    

                    public function sleep($hours)
                    {
                        echo "human must sleep.$hours";
                    }
                }
                $human = new Ann();
                echo $human->eat();
                ```
            * 子类实现接口时，必须实现接口中的所有方法
    * trait复用
        解决单一继承问题；
        同时使用多个trait，用逗号隔开；
        把常用的，通用代码抽离出来，不管逻辑关系；
        不能有类常量，不能实例化 ;
        可以使用抽象方法；
        可以使用静态属性和静态方法；
        可以使用其他trait；

            ```php
            trait A {
                public function TextA(){
                    echo "A里面有".__METHOD__;
                } 
            }
            trait B {
                use A;
                public function dance(){
                    echo "B里面有".__METHOD__;
                } 
            }

            class Human {
                use B;
                function sleep($hours){
                    echo '测试'.$hours;
                }
                public function eat()
                {
                    echo 'human must eat.';
                }
            
            }

            $human = new Human('Jane');
            echo $human->TextA();//A里面有A::TextA
            ```
        可以使用parent
        注：方法名和类名不要有冲突
        ```php
        class Action{
            public function drink(){
                echo "Everybody are hahaha";
            }
        }
        trait Human {
            public function do(){
                parent::drink();
                echo $this->name."is playing";
                echo __TRAIT__;
            }
        }
        class Somebody extends Action{
            use Human;
            protected $name;
            public function __construct($name)
            {
                $this->name = $name;
            }
        }

        $human = new Somebody('Jane');
        echo $human->do();
        ```   
        注：trait的方法同名和属性同名冲突
        * 解决方法同名冲突
            * insteadOf
            * as
            ```php
            trait A
            {
                public function eat(){
                    echo "This is A.";
                }
            }
            trait B
            {
                public function eat(){
                    echo "This is B.";
                }
            }
            class Somebody{
                use A,B{
                    B::eat insteadOf A;//B的eat替换掉A的
                    A::eat as Aeat;//A重命名为Aeat,as还能更改方法访问权限，如下：
                    // A::eat as protected Aeat;
                }
                // public function test()
                // {
                //     echo $this->Aeat();
                // }
            }
            $human = new Somebody;
            echo $human->eat();//This is B.
            echo $human->Aeat();//This is A.
            ```     

### 表单和请求
* 表单制作（见Form文件夹）
* get和post及两者区别   
    * get:数据附加在URL上
    * 
    * 区别 
        * get对任何人可见,信息量有限制，不能超过2000个字符；可以将带参数的网址发送别人；可以收藏get请求页面。
        * post参数对任何人不可见，发送信息量没有限制，默认发送量最大值为8M，但可以设置php.ini的post_max_size进行更改；发送的变量数最大值max_input_vars
* $_REQUEST(包含$_GET,$_POST,$_COOKIE)
    $_SERVER获取请求方式
* htmlspecialchars()：将字符串中的特殊字符转换为HTML实体，避免在HTML文档中引起解析错误或安全漏洞
    &  --->&amp
    "" --->&quot
    '' --->&#039
    <  --->&lt
    >  --->&gt

### mysql数据库
密码：wangzzWZZ
连接数据库：mysql -u root -p
show databases
使用数据库：use ****
查看数据表列表：show tables
数据库工具：SQL_Front,Navicat,DBeaver
操作数据库的方式：MySQLi PDO
#### MySQLi(只操作mysql)
* 启用扩展mysqli，在php.ini中添加extension=php_mysqli
* 面向过程
    ```php
    $servername = "localhost";
    $username = "root1";
    $password ="wangzzWZZ";

    try {
        //$cont返回object对象
        $cont = mysqli_connect($servername, $username, $password);
    } catch (\Exception $e) {
        die("アクセスできない".$e->getMessage());
    }

    // if(!$cont){
    //     die("アクセスできない" . mysqli_connect_error());
    // }
    echo "OK";
    mysqli_close($cont);
    ```
* 面向对象
    ```php
    $servername = "localhost";
    $username = "root";
    $password ="wangzzWZZa";

    try {
    $cont = new mysqli($servername, $username, $password);
    } catch (\Exception $e) {
        die("アクセスできない".$e->getMessage());
    }

    // if($cont->connect_error){
    //     die("アクセスできない" . $cont->connect_error);
    // }
    echo "success";
    $cont->close();
    ```
* resource资源类型
    ```php
    $servername = "localhost";
    $username = "root";
    $password ="wangzzWZZ";

    $cont = mysqli_connect($servername, $username, $password);
    // mysql_connect  在php5.*时还能用，后面废弃了
    // var_dump($cont);
    // var_dump(is_resource($cont));//false
    // var_dump(gettype($cont) === 'resource');//false
    // var_dump(get_resource_type($cont));//获取资源是什么类型

    $do = fopen("text.txt", "r");
    var_dump($do);//resource(4) of type (stream) b
    var_dump(is_resource($do));//bool(true)是否为资源类型
    var_dump(gettype($do) === 'resource');//bool(true)
    var_dump(get_resource_type($do));//string(6) "stream"获取资源的类型名称
    $cont = fread($do, filesize("text.txt"));//this is a text.
    echo $cont;
    fclose($do);
    ```
* 创建数据库(createmysql1.php)
NOT NULL：必须含值，不能为空，null值也不允许
UNSIGNED：无符号数值类型，0及正数
AUTO INCREMENT
PRIMARY KEY 主键
* 常见条件判断(createmysql2.php)
    * where 条件筛选
    * like %xxx%  %xxx  xxx%(以xxx开头)
    * between and 
    * is null/is not null
    * in(a,b,c)
    * and/or
    * order by 列名 asc(升序，默认).可以两列排序，用逗号隔开，只有第一列值相同时才使用第二列
    * limit 限制数
    * offset 偏移量（可以指定从哪一条开始）
* 更新数据
    UPDATE SET column1=value, column2=value2, ...WHERE
* 修改数据表
    修改表名：
    ALTER TABLE 旧表名 RENAME 新表名；

    重置自增起始值为1：
    ALTER TABLE 表名 AUTO_INCREMENT = 1;

    添加新列：
    ALTER TABLE 表名 ADD COLUMN 列名 数据类型；

    修改列名和数据类型：
    ALTER TABLE 表名 CHANGE COLUMN 旧列名 新列名 新数据类型；

    修改默认值：
    ALTER TABLE 表名 ALTER COLUMN 列名 SET DEFAULT 默认值；

    删除列：
    ALTER TABLE 表名 DROP COLUMN 列名；

    修改列的注释：
    ALTER TABLE 表名 MODIFY COLUMN 列名 数据类型 COMMENT '新注释';

    删除数据表：
    DROP TABLE IF EXISTS 表名;

    删除数据库：
    DROP database;


#### 预处理语句(Form/user.php)
预处理语句：执行带有参数的SQL语句。
提高安全性，防止SQL注入；
能重复使用相同的sql模板而只需更改参数，提高执行效率。

在输入框出输入"or  1=1 or"，可能会导致用户数据泄露.
(1)
```php
$sql ='SELECT * FROM users WHERE username = "'.$username.'" AND password = "'.$password.'"';
或者
$sql ="SELECT * FROM users WHERE username = ? AND password = ?";
或者
$sql = "INSERT INTO users (username, password)
        VALUES (?, ?)";

$stmt = $cont->prepare($sql);
$stmt->bind_param("ss",$username,$password);
$stmt->execute();
var_dump($stmt->affected_rows);
$stmt->close();
```
(2)传统方法：prepare(),bind_param(),execute(),get_result()
(3)php8.2及以上版本使用:execute_query($sql,[$param,$param,...])

#### PDO(操作多种数据库)
需要安装php_pdo_mysql扩展，可用phpinfo()检测
* PDO执行sql语句方法 
    * exec()方法
        适用于执行不返回结果集的SQL语句，如：INSERT,UPDATE和DELETE等操作；
        返回受影响的行数，若没有受影响的行数，返回0；
        通常用于不需要获取结果的简单操作。
    * query()方法
        返回结果集的SQL语句，如：SELECT；
        返回一个PDOStatement对象，使用该对象的方法（如：fetch(),fetchAll()来获取查询结果；
        通常用于需要获取结果的查询操作。





