<?php
require './mysql.php ';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$datas = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/base.css">
</head>
<body>
    <div class="contact">
        <form action="./message.php" method="post">
            <label>name</label>
            <input type="text" name="username">
            <label>Email Address</label>
            <input type="text" name="email">
            <label>Your Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
    <div class="data-list">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php
            foreach($datas as $key => $value){
                echo '<tr> 
                <td>'.$value['username'].'</td>
                <td>'.$value['email'].'</td>
                <td>'.$value['message'].'</td>
                </tr>';
                
            }
        ?>
        </table>
        
    </div>
</body>
</html>
