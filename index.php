<?php 
    // echo "hello world!";
    // echo print 'Good';
    // $input1 = readline("请输入内容：");
    // $input2 = readline("请输入内容：");
    // echo "您输入的内容是：" . ($input1+$input2);

    // echo 'please input:';
    // $input = fgets(STDIN);
    // echo "您输入的内容是：" . $input;

    $text = 'apple';
    echo gettype($text);
    echo '<hr>';
    var_dump($text);
    echo "文本是$text";//文本是apple
    echo '<hr>';
    echo '文本是$text';//文本是$text
    echo '<hr>';

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
    echo '<hr>';

    $x = 10.365;
    var_dump($x);
    echo '<br>';
    $x = 2.4e3;
    var_dump($x);
    echo '<br>';
    $x = 8E-5;
    var_dump($x);
    echo '<hr>';

    print('<pre>');
    $cars = array("BMW","Volvo","SAAB");
    $_cars = ["BMW","Volvo","SAAB"];
    var_dump($cars);
    var_dump($_cars);
    
    echo '<hr>';
    $text = "Hello World!";
    var_dump($text);
    $text = null;
    var_dump($text);
?>