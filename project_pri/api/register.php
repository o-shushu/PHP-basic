<?php
function isEmpty($str){
    return $str === null || empty($str);
}

function strlenMin($str){
    return strlen($str) < 6;
}

$message = "";
foreach (["username","password"] as $key => $value){
    if (!isset($_POST[$value])){
        $message = $value."は必要です。";
        break;
    }

    if(isEmpty($_POST[$value])){
        $message = $value."空になれない。";
    }

    if($value === 'password' && strlenMin($_POST[$value])){
        $message = $value."長さは6文字以上。";
        break;
    }
}

$responseDate = [
    "code" => 0,//错误码，0无错，非0有错
    "msg" => $message,
    "data" => [],
];

if($message !== ""){
    $responseDate["code"] = 1;
}
print_r(json_encode($responseDate,JSON_UNESCAPED_UNICODE));//数组转为JSON
?>