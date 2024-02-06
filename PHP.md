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
* 基本格式
* 基本格式
* 基本格式
* 基本格式
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