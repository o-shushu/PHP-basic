<?php
    $servername = "localhost";
    $username = "root";
    $password ="wangzzWZZ";

    try {
        $cont = new mysqli($servername,$username,$password);
    } catch (\Exception $e) {
        die('false access'.$e->getMessage());
    }
    
    $cont->query('USE maoshuaa');
    $sql = 'ALTER TABLE user RENAME users';
    $sql = $cont->query($sql);
    var_dump($sql);
    // $sql = 'UPDATE users SET username = "Ann" WHERE id in (2,5,8)';
    // $sql = $cont->query($sql);
    // $sql = 'SELECT * FROM users WHERE username like "%n%"
    //     and create_data
    //     between "2024-03-13 13:50:11" and "2024-03-13 14:00:41"
    //     order by id DESC limit 2';
    // $result = $cont->query($sql);
    // $arr = [];
    // while($row = $result->fetch_assoc()){
    //     $arr[] = $row;
    // }
    // print_r($arr);
   $cont->close();
