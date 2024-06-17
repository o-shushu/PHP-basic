<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户注册</title>
    <link rel="stylesheet" href="../public/css/login.css">
    <?php include "./common/head.php" ?>
</head>
<body>
    <?php include "./common/header.php" ?>

    <main class="main">
        <div class="container">
            <h2 class="site-title">ログイン画面</h2>
            <form action="" id="submit_form">
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
                    <li class="line submit_line">
                        <input type="submit" name="ログイン">
                        <a href="./register.php">登録ヘ</a>
                    </li>
                </ul>
            </form>
        </div>
    </main>

    <?php include "./common/footer.php" ?>
</body>
</html>