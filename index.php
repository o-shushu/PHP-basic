<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .navbar a {
            text-decoration: none;
            color: black;
        }
        .navbar a.active {
            color: red;
        }
    </style>
</head>
<body>
    <?php 
        $navbar = [
            [
                "href"=>"home",
                "title"=>"首页",
            ],
            [
                "href"=>"about",
                "title"=>"关于",
            ],
            [
                "href"=>"posts",
                "title"=>"博客",
            ],
            [
                "href"=>"contact",
                "title"=>"联系我",
            ],
        ];

        $content = [
            [
                "content"=>"主页天地",
                "createDay"=>"2023.12.20",
            ],
            [
                "content"=>"关于更多",
                "createDay"=>"2023.12.20",
            ],
            [
                "content"=>"丰富的博客",
                "createDay"=>"2023.12.20",
            ],
            [
                "content"=>"联系方式等",
                "createDay"=>"2023.12.20",
            ],
        ]
    ?>
    <div class="navbar">
        <?php 
        foreach($navbar as $key => $value){
            if($key == count($navbar)-1 ){
                echo '<a class="active" href=#'.$value['href'].">".$value['title'].'</a>';
            } else {
                echo '<a href=#'.$value['href'].">".$value['title'].'</a>';
            }
        }
        ?>
        <!-- <a href="#home">anv</a>
        <a href="#about">about</a>
        <a href="#posts">posts</a>
        <a href="#contact">contact</a> -->
    </div>
    <div class="container">
        <h1>欢迎来到博客</h1>
        <?php 
        foreach($content as $key => $value){
        ?>
        <div class="text-area">
            <span class="number"><?php echo $key+1;?></span>
            <span class="create-day">
                <?php echo $value["createDay"]; ?>
            </span>
            <?php echo $value["content"]; ?>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>
