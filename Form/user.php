<?php
$hostname = 'localhost';
$username = 'root';
$password ='wangzzWZZ';

try {
    $cont = new mysqli($hostname, $username, $password,"maoshuaa");
} catch (\Exception $e) {
    die('アクセスできない'.$e->getMessage());
}
$username = $_POST['username'];
$password = $_POST['password'];

//(1)
// $sql ='SELECT * FROM users WHERE username = "'.$username.'" AND password = "'.$password.'"';

//(2)
// $sql ="SELECT * FROM users WHERE username = ? AND password = ?";
// $stmt = $cont->prepare($sql);//预处理
// $stmt->bind_param("ss",$username,$password);//绑定；ss表两个变量的数据类型
// $stmt->execute();//执行
// $result = $stmt->get_result();//获取结果
// echo $sql;
// echo '<pre>';
// print_r($result->fetch_all(MYSQLI_ASSOC));

// $stmt->close();

//(3)语句重复执行
// $sql = "INSERT INTO users (username, password)
//         VALUES (?, ?)";
// $stmt = $cont->prepare($sql);
// $stmt->bind_param("ss",$username,$password);
// $stmt->execute();

// $username = 'xiaoming';
// $password = 'xiaoming';
// $stmt->execute();

// $username = 'xiaohong';
// $password = 'xiaohong';
// $stmt->execute();

// var_dump($stmt->affected_rows);//不管一次性插入多少个用户数据，$stmt->affected_rows都为1
// if($stmt->affected_rows > 0){
//     echo "success";
// }else{
//     echo "false";
// }
// $stmt->close();

//(4)php8.2预处理新方法
// print_r(phpinfo());
$sql = "INSERT INTO users (username, password)
        VALUES (?, ?)";
$cont->execute_query($sql,[$username,$password]);
$cont->execute_query($sql,['huanhuan','huanhuan']);
$cont->execute_query($sql,['beibei','beibei']);
$cont->close();
// echo $_SERVER['REQUEST_METHOD'];
// var_dump($_REQUEST);