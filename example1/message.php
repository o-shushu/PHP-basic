<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $accessed = true;
    foreach(["username", "email", "message"] as $key => $value){
        if(empty($_POST[$value])){
            $accessed = false;
            echo '<script> alert("'.$value.'必要です。")</script>';
            break;
        }
    }
    if($accessed){
        $conn = new mysqli("localhost", "root", "wangzzWZZ", "example1");
        if($err = $conn->connect_error){
            die("失敗原因：".$err);
        }
        $sql = "INSERT INTO users (username, email, message)
                VALUES(?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss",$_POST['username'], $_POST['email'], $_POST['message']);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        require './index.php';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>