<?php
//创建cookie
    // $expire = time()+60*60*24*7;//七天之后过期
    // setcookie("username", "text", $expire);
    // setcookie("userid", "id", $expire);

    // setcookie("user[name]", "Ann", $expire);
    // setcookie("user[sex]", "female", $expire);
    // setcookie("user[comment]", "access success", $expire);

//获取cookie
    // if(isset($_COOKIE["username"])){
    //     echo $_COOKIE["username"];
    // }
    // if(isset($_COOKIE["user"])){
    //     echo "<pre>";
    //     print_r($_COOKIE["user"]);
    // }

//查看所有cookie
    // print_r($_COOKIE);

//删除cookie
    // setcookie("username", "", time()-3600);//注意在setcookie之前是不能有任何输出的

//Session案例
    session_start();//开启
    // if(isset($_SESSION['views'])){
    //     $_SESSION['views'] = $_SESSION['views']+1;
    // }else{
    //     $_SESSION['views']=1;
    // }
    // echo "nums:". $_SESSION['views'];

    // if(isset($_SESSION['views'])){
    //     unset($_SESSION['views']);//删除某个变量或者值
    // }
    // var_dump($_SESSION);//array(0) { }
//销毁
session_destroy();
var_dump($_SESSION);//array(0) { }
