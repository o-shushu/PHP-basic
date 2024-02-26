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


