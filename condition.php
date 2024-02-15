<?php 
$a = 10;

if($a == 20){
    echo 'equal 20';
}
if($a == 30){
    echo 'equal 30';
}
echo 'other';
//条件多，单一固定值的匹配
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
//循环语句
//PHP_EOL//常量，换行
for($i=0,$j=0; $i<5; $i++,$j++){
    echo $j;
    if($i == 2){
        continue;
    }
    echo $i.PHP_EOL;
}

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
// do{

// }while()

foreach循环 