<?php
$dbms = 'mysql';         //数据库类型
$host = 'localhost';     //数据库主机名
$dbName = 'example1';    //使用的数据库
$user = 'root';          //数据库连接的用户名
$password = 'wangzzWZZ'; //对应的密码
$dsn = "$dbms:host=$host;dbname=$dbName";
try {
    $conn = new PDO($dsn,$user,$password);
    //设置PDO错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //PDO::ERRMODE_WARNING 警告
    //PDO::ERRMODE_SILENT  错误码
    echo 'access success';
    
} catch (PDOException $e) {
    die('errors:'.$e->getMessage()."</br>");
}


try {
    //创建数据库
    $sql = "CREATE DATABASE IF NOT EXISTS testpdo";
    $conn->exec($sql);
    echo 'database success';
    //使用PDO::ERRMODE_SILENT  错误码
    // var_dump($conn->errorCode());
    // var_dump($conn->errorInfo());
    // $conn = null;
} catch (PDOException $e) {
    die('errors:'.$e->getMessage()."</br>");
}
    //查询数据
    $sql = "SELECT * FROM users WHERE id<5";
    $result = $conn->query($sql);
    $result = $result->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($result);

    //更新数据
    $sql = "UPDATE users SET username = 'qi' WHERE id = 2 ";
    $stmt = $conn->exec($sql);
    // var_dump($stmt);

    //删除数据
    // $sql = "DELETE FROM users WHERE id = 3";
    // $stmt = $conn->exec($sql);
    // var_dump($stmt);

    //插入数据
        // $sql = "INSERT INTO users(username, email, message)
        //         VALUES(:username, :email, :message)";

        // $stmt = $conn->prepare($sql);
        // $stmt->bindParam(':username', $username);
        // $stmt->bindParam(':email', $email);
        // $stmt->bindParam(':message', $message);

        // $username = 'happy';
        // $email = 'happy@text.com';
        // $message = 'hello world';

        // $stmt->execute();
   

    //事务处理和批量插入数据
    try {
        $conn->beginTransaction();//开启事务

        $sql = "INSERT INTO users(username, email, message)
            VALUES(?, ?, ?)";
        $stmt = $conn->prepare($sql);
        // $stmt->execute(["people1", "people1@text.com", "people1 happy"]);
        // $stmt->execute(["people2", "people2@text.com", "people2 happy"]);
        // $stmt->execute(["people3", "people3@text.com", "people3 happy"]);
        //获取插入的条数
        // $rowCount = $stmt->rowCount();//1
        // var_dump($rowCount);

        $data = array(
            array("peoA", "peoA@text.com", "peoA happy"),
            array("peoB", "peoB@text.com", "peoB happy"),
            array("peoC", "peoC@text.com", "peoC happy")
        );
        $insertedRows = 0;
        foreach($data as $row) {
            $stmt->execute($row);
            $insertedRows += $stmt->rowCount();
        }

        var_dump($insertedRows);
        $conn->commit();//提交事务

     
    } catch (PDOException $e) {
        $conn->rollBack();
        echo 'false:' . $e->getMessage();
    }

    