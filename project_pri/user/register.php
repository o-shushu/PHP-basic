<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户注册</title>
    <link rel="stylesheet" href="../public/css/login.css">
    <?php include "/laragon/www/maoshu-php/PHP-basic/project_pri/user/common/head.php" ?>
</head>
<body>
    <?php include "/laragon/www/maoshu-php/PHP-basic/project_pri/user/common/header.php" ?>

    <main class="main">
        <div class="container">
            <h2 class="site-title">登録画面</h2>
            <form action="" id="submit_form" onsubmit="submitForm(event)">
                <ul>
                    <li class="line">
                        <!-- 快速复制键：alt+shift+下箭头 -->
                        <span class="title">
                            ユーザー名：
                        </span>
                        <input type="text" name="username">
                    </li>
                    <li class="line">
                        <span class="title">
                            パスワード：
                        </span>
                        <input type="password" name="password">
                    </li>
                    <li class="line">
                        <span class="title">
                            パスワード確認：
                        </span>
                        <input type="password" name="re_password">
                    </li>
                    <li class="line submit_line">
                        <input type="submit" value="提交注册">
                        <a href="./login.php">ログインヘ</a>
                    </li>
                </ul>
            </form>
        </div>
    </main>
    
    <?php include "/laragon/www/maoshu-php/PHP-basic/project_pri/user/common/footer.php" ?>
<script>
    function isEmpty(str){
        return str === undefined || str === null || str.trim() === '';
    }
    function strlenMin(str){
        return str.length < 6;
    }
    function submitForm(event){
        event.preventDefault()//阻止点击后跳走到其他页面
        console.log('submit');
        var form = document.getElementById('submit_form');
        var formData = new FormData(form);
        var datas =formData.entries();//获取数据
        var pass,re_pass;
        // for (const iterator of datas) {
        //     console.log('iterator:', iterator);

        //     if(isEmpty(iterator[1])){
        //         alert(iterator[0] + "空になれない。")
        //         break;
        //     }

        //     if(iterator[0].indexOf('password')>=0){
        //         if (iterator[0] == 'password') {
        //             pass = iterator[1];
        //         } else {
        //             re_pass = iterator[1]
        //         }
        //         if(strlenMin(iterator[1])){
        //             alert(iterator[0] + "長さは6文字以上。")
        //             break;
        //         }
        //     }

        //     if(pass && re_pass && pass !== re_pass){
        //         alert('パスワードは一致していない。')
        //     }
        // }
    
        var url = "../api/register.php";
        //fetch請求
        fetch(url,{
            method:'POST',
            body:formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if(data.code !== 0){
                alert(data.msg);
            }else{
                console.log('register success');
            }
        })
        .catch(error => {
            console.log('error:', error);
        })
    }
</script>
</body>
</html>