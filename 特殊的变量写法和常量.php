<?php
namespace attendance;
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
//实际使用场景(很少用，常用数组实现)
for ($i = 0; $i < 5; $i++){
    $a = 'innumerable'.$i;
    $$a = 'test-'.$i;
}
echo $innumerable1;
echo $innumerable2;
//常量：一旦被定义在任何地方都不能被改变；
//与变量类似，严格区分大小写，无需使用$；
//默认全局，任何地方都能使用
//(1)define
define('__MAC__', 'haha,mac');
echo __MAC__;
//(2)const
const MAC = 'hello';
echo MAC;
//拼接常量名constant()
$a = 2;
define('__MAC__'.$a, 'haha,mac');
echo constant('__MAC__'.$a);//不能直接输出常量名，要用constant()
//const与define区别
//const：不能在条件语句中定义常量;可在类中使用
//define：不能用于类成员变量中使用
$a = 1;
if($a==1){
    define('__MAC__'.$a, 'haha,mac');
    echo constant('__MAC__'.$a);
    //const MAC = 'hello';//会报错
    // echo MAC;
}

class text {
    //define('text1', 'haha,mac');//此处difine不可以正常使用
    const text = 'dioxide';
    public function sum()
    {
        define('text1', 'haha,mac');//difine可以正常使用
        echo self::text;
    }
}
$c = new text;
$c->sum();
//echo text;//不能被输出的
//常量和变量的区别
//常量前不能有美元符号
//常量不用关心变量的作用域在任何地方定义和访问
//常量一旦定义就不能重新定义或取消定义
//常量的值只能是标量（字符串，整数，浮点数，布尔值）现已支持数组
//获取所有的常量get_defined_constants();
print_r(get_defined_constants());
print_r(get_defined_constants(true));
print_r(get_defined_constants(true)['date']);
//魔术常量
class testClass {
    function add(){
        // echo 'name of class:' . __CLASS__ . "<br>";
        // echo 'name of function:' . __FUNCTION__;
        echo __METHOD__;
    }
}
$use = new testClass;
$use->add();