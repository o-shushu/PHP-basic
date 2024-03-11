<?php
    $servername = "localhost";
    $username = "root";
    $password ="wangzzWZZ";
    //1.连接数据库
    try {
    $cont = new mysqli($servername, $username, $password);
    } catch (\Exception $e) {
        die("アクセスできない".$e->getMessage());
    }

    // if($cont->connect_error){
    //     die("アクセスできない" . $cont->connect_error);
    // }
    echo "success";

    //2.创建数据库
        // $sql = "CREATE DATABASE IF NOT EXISTS maoshuaa";//此处对数据库名称的大小写不敏感
        // if($cont->query($sql) === true){
        //     echo "database was builded.";
        // }else{
        //     echo "false".$cont->error;
        // }

    //3.创建数据表
        $cont->query("USE maoshuaa");
        // $sql = "CREATE TABLE IF NOT EXISTS users (
        //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     username VARCHAR(30) NOT NULL COMMENT \"ユーザーネーム\",
        //     password VARCHAR(64) NOT NULL,
        //     status INT(1) NOT NULL DEFAULT 1,
        //     create_data TIMESTAMP
        // )";
        // if($cont->query($sql) === true){
        //     echo "table was builded.";
        // }else{
        //     echo "false".$cont->error;
        // }

    //4.(1)插入数据
        // $name = "this is a 'test' user";
        // $name = $cont->real_escape_string($name);//real_escape_string()字符串转义处理，避免SQL注入
        // $sql = "INSERT INTO users(username, password)
        // VALUES
        // ('$name.1', '121211'),
        // ('".$name."2"."', '121212'),
        // ('$name.3', '121213')";

        // if($cont->query($sql) === true){
        //     echo "insert success";
        // }else{
        //     echo "insert false";
        // }

    //4.(2)循环插入数据multi_query()
        // $sql = "INSERT INTO users(username, password)
        // VALUES ('Jane', '01010101');";
        // $sql .= "INSERT INTO users(username, password)
        // VALUES ('Ann', '01010102');";
        // $sql .= "INSERT INTO users(username, password)
        // VALUES ('George', '01010103');";

        // if ($cont->multi_query($sql) === true){
        //     echo 'multi_query() success';
        // }else{
        //     echo 'multi_query() false:' . $sql . "<br>" .$cont->error;
        // }

    //5.查询数据
    //$result->num_rows:获取数据的条数
    //$result->fetch_assoc():以关联数组的形式返回结果，是从结果集中获取一行数据的函数
    //fetch_row()(拿到索引),fetch_array()(拿到索引和字段),fetch_all()(索引类型的数组，fetch_all(MYSQLI_ASSOC),fetch_all(MYSQLI_BOTH))
    //free_result()：释放结果集所占用的内存资源
        $sql = "SELECT * FROM users";
        $result = $cont->query($sql);
        $arr = [];
        if($result->num_rows > 0){
            echo "total:".$result->num_rows."</br>";
            //(1)
            // while($row = $result->fetch_assoc()){
            //     echo 'id:'.$row["id"].'name:'.$row["username"].'password:'.$row["password"]."</br>";
            // }
            //(2)
                while($row = $result->fetch_assoc()){
                    $arr[] = $row;
                }
        }else{
            echo 'none';
        }
        print_r($arr);
        $result->free_result();//一般不用特意去写，除非占用量很大时
    $cont->close();
