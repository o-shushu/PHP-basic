<?php
$text = 'What ARE You Doing NOW? LOTUS.';
function lcwords($string){
    $arr = explode(" ",$string);
    foreach($arr as $value){
        $arr_new[] = lcfirst($value);
    }
    return implode(" ",$arr_new);
}
echo lcwords($text);