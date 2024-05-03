<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<head>
    <?php
        $title = "Travel Agency";
        require_once "blocks/head.php";
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <div id="bigArticle">
                <h2>Франция</h2>
                <br>
                <img src="./img/article/1.jpg" alt="Статья 1" title="Статья 1"> 
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, facilis? Voluptas quibusdam adipisci voluptate totam magnam praesentium commodi explicabo voluptatem. Beatae culpa facilis, minima soluta labore placeat id commodi minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi deserunt voluptas voluptatem nulla odit maiores molestias in tempora! Laboriosam sint iure nobis inventore ipsa deserunt accusantium, illum laudantium minus aperiam!</p>
                <a href="/article.php">
                    <div class="more">Далее</div>
                </a>
            </div>
            <div class="clear"><br></div>
            <div class="article">
                <h2>Египет</h2>
                <br>
                <img src="./img/article/2.jpg" alt="Статья 1" title="Статья 1"> 
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, facilis? Voluptas quibusdam adipisci voluptate totam magnam praesentium commodi explicabo voluptatem. Beatae culpa facilis, minima soluta labore placeat id commodi minus. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="/article.php">
                    <div class="more">Далее</div>
                </a>
            </div>
            <div class="article">
                <h2>Италия</h2>
                <br>
                <img src="./img/article/3.jpg" alt="Статья 1" title="Статья 1"> 
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, facilis? Voluptas quibusdam adipisci voluptate totam magnam praesentium commodi explicabo voluptatem. Beatae culpa facilis, minima soluta labore placeat id commodi minus. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="/article.php">
                    <div class="more">Далее</div>
                </a>
            </div>
        </div>       
        <?php require_once "blocks/rightCol.php" ?>
    </div>

    <?php require_once "blocks/footer.php" ?>
</body>
</html>