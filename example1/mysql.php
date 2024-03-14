<?php
$hostname = 'localhost';
$username = 'root';
$password = 'wangzzWZZ';

try {
    $conn = new mysqli($hostname, $username, $password);
} catch (\Exception $e) {
    die('アクセスできない'.$e->getMessage());
}

try {
    $sql = 'CREATE DATABASE IF NOT EXISTS example1';
    if($conn->query($sql) === true){
        echo "database was built.";
    }else{
        return 'database error';
    }
    $conn->query('USE example1');
    $sql = 'CREATE TABLE IF NOT EXISTS users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL COMMENT \'ユーザーネーム\',
            email VARCHAR(64) NOT NULL COMMENT \'メールアドレス\',
            message VARCHAR(255) NOT NULL COMMENT \'問合せ\',
            status INT NOT NULL DEFAULT 1,
            create_data TIMESTAMP
    )';
    $conn->query($sql);
} catch (\Exception $e) {
    die('テーブルが作成できません。'.$e->getMessage());

}

